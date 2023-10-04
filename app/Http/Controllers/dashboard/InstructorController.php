<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\AttachmentsDataTable;
use App\DataTables\CountriesDataTable;
use App\DataTables\EbookDataTable;
use App\DataTables\InstructorsDataTable;
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
use App\Models\Page;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;



class InstructorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(InstructorsDataTable $dataTable)
    {
         return $dataTable->render('dashboard.instructor.index');
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
            'country_id'=>$request->country_id,
            'commission_instructor'=>$request->commission_instructor,
        ];
        if ($request->has('image')){
            $file=$request->file('image')->getClientOriginalExtension();
            $path = Storage::disk('s3')->put('Instructors/'.time() . '_' . random_int(1, 100000) . '.' . $file, $request->image, 'public');
            $data['image'] = Storage::disk('s3')->url($path);
        }
        $data['slug'] = Str::slug($data['name'],'-');
        $instructor=Instructor::create($data) ;


        foreach ($request->attachs as $image)
        {
            $path='public/instructorAttachs';
            $imageName = md5(rand(1000,9999).time()). '.'.$image->getClientOriginalExtension();
            $img=$image->move($path,$imageName);
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
          if($request->password!=null&&$request->password!=''){
            $data=[
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'password'=>bcrypt($request->password),
                'brief'=>$request->brief,
                'category_id'=>$request->category_id,
                'country_id'=>$request->country_id,
                'commission_instructor'=>$request->commission_instructor,
                'status'=>$request->status??'0',
            ];
            if ($request->has('image')){
                $file=$request->file('image')->getClientOriginalExtension();
                $data['image']=$request->file('image')->move('public/pages',time() . '_' . random_int(1, 100000) . '.' . $file);
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
                'country_id'=>$request->country_id,
                'commission_instructor'=>$request->commission_instructor,
                'status'=>$request->status??'0',


            ];
            if ($request->has('image')){
                $file=$request->file('image')->getClientOriginalExtension();
                $data['image']=$request->file('image')->move('public/pages',time() . '_' . random_int(1, 100000) . '.' . $file);

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
        Instructor::find($id)->delete();
        Alert::error('Deleted',__('dashboard.deleted'));

        return redirect()->route('instructors.index');
    }
}
