<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\AttachmentsDataTable;
use App\DataTables\CountriesDataTable;
use App\DataTables\EbookDataTable;
use App\DataTables\InstructorsDataTable;
use App\DataTables\InstructorsRequestsDataTable;
use App\DataTables\PagesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\EbookRequest;
use App\Http\Requests\InstructorsRequest;
use App\Http\Requests\PagesRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\Ebook;
use App\Models\Instructor;
use App\Models\InstructorAttachs;
use App\Models\InstructorRequests;
use App\Models\Page;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;



class InstructorRequestsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(InstructorsRequestsDataTable $dataTable)
    {
         return $dataTable->render('dashboard.instructor_requests.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries=Country::with('translations')->get();
        $categories=Category::with('translations')->get();
        return  view('dashboard.instructor.create',compact('countries','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InstructorsRequest $request)
    {
         $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'phone'=>$request->phone,
            'brief'=>$request->brief,
            'image'=>$request->file('image'),
            'category_id'=>$request->category_id,
            'country_id'=>$request->category_id,
        ];
        if ($request->has('image'))
        {
            $file=$request->file('image')->getClientOriginalExtension();
            $path = Storage::disk('s3')->put('InstructorsRequests/'.time() . '_' . random_int(1, 100000) . '.' . $file, $request->image, 'public');
            $data['image'] = Storage::disk('s3')->url($path);
        }
        $instructor=Instructor::create($data) ;


        foreach ($request->attachs as $image)
        {
            $file=$image->getClientOriginalExtension();
            $path = Storage::disk('s3')->put('InstructorsRequests/'.time() . '_' . random_int(1, 100000) . '.' . $file, $image, 'public');
            $img = Storage::disk('s3')->url($path);
            InstructorAttachs::create(['file'=>$img,'instructor_id'=>$instructor->id]);
        }
        Alert::success('Success',__('dashboard.success'));
        return redirect()->route('instructors.index');


    }
        public function attachs($id){
        $attachs=InstructorAttachs::where('instructor_id',$id)->get();
         return view('dashboard.instructor.attachments',compact('attachs'));


        }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $instructor=Instructor::find($id);
        $countries=Country::with('translations')->get();
        $categories=Category::with('translations')->get();
        return  view('dashboard.instructor.edit',compact('instructor','countries','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InstructorsRequest $request, $id)
    {
        $instructor=Instructor::find($id);
        if($request->has('password')){
            $data=[
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'password'=>bcrypt($request->password),
                'brief'=>$request->brief,
                'category_id'=>$request->category_id,
                'country_id'=>$request->category_id,
            ];
            if ($request->has('image'))
            {
                $file=$request->file('image')->getClientOriginalExtension();
                $path = Storage::disk('s3')->put('InstructorsRequests/'.time() . '_' . random_int(1, 100000) . '.' . $file, $request->image, 'public');
                $data['image'] = Storage::disk('s3')->url($path);
            }
            $instructor->update($data);

        }
        else{
            $data=[
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'brief'=>$request->brief,
                'category_id'=>$request->category_id,
                'country_id'=>$request->category_id,
            ];
            if ($request->has('image')){
                $file=$request->file('image')->getClientOriginalExtension();
                $path = Storage::disk('s3')->put('InstructorsRequests/'.time() . '_' . random_int(1, 100000) . '.' . $file, $request->image, 'public');
                $data['image'] = Storage::disk('s3')->url($path);
            }
            $instructor->update($data);

        }


        Alert::success('UPDATED',__('dashboard.update'));
        return redirect()->route('instructors.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        InstructorRequests::find($id)->delete();
        Alert::error('Deleted',__('dashboard.deleted'));
        return redirect()->route('instructor-requests.index');
    }
    public function accept_request($id)
    {
        $request=InstructorRequests::find($id);
        $slug = Str::slug($request->name,'-');
        $generate_password=str_random(8);
        $password = Hash::make($generate_password);
        Instructor::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'slug'=>$slug,
            'password'=>$password,
            'phone'=>$request->phone,

        ]);
        $request->delete();
        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$generate_password,
        ];
        Mail::to($request->email)->send(new \App\Mail\Instructor($data));

        Alert::success('Success',__('dashboard.success'));
        return redirect()->back();
    }
 }
