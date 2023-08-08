<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\CountriesDataTable;
use App\DataTables\CustomersDataTable;
use App\DataTables\EbookDataTable;
use App\DataTables\IndexDataTable;
use App\DataTables\InstructorsDataTable;
use App\DataTables\PagesDataTable;
use App\DataTables\VideoIndexDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\CoursesIndexRequest;
use App\Http\Requests\CoursesIndexVideosRequest;
use App\Http\Requests\CustomersRequest;
use App\Http\Requests\EbookRequest;
use App\Http\Requests\InstructorsRequest;
use App\Http\Requests\PagesRequest;
use App\Http\Requests\VideoIndexesRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\CourseIndexes;
use App\Models\CourseIndexesVideos;
use App\Models\Customers;
use App\Models\Ebook;
use App\Models\Instructor;
use App\Models\InstructorAttachs;
use App\Models\Page;
use App\Models\VideosIndexes;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;
use function PHPUnit\Framework\countOf;


class VideoIndexesController extends Controller
{


    public function index(VideoIndexDataTable $dataTable,$id)
    {
         return $dataTable->with('video_id',$id)->render('dashboard.video_index.index',compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_video_index($id)
    {

         return  view('dashboard.video_index.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideoIndexesRequest $request)
    {
//        dd($request->course_id);
         VideosIndexes::create($request->all());
        Alert::success('Success','تم إضافة البيانات بنجاح');
        return redirect()->route('video-index.index',$request->video_id);



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
        $customer=Customers::find($id);
        $countries=Country::with('translations')->get();
        return  view('dashboard.customers.edit',compact('customer','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomersRequest $request, $id)
    {
        $customer=Customers::find($id);
        if($request->has('password')){
            $data=[
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'password'=>bcrypt($request->password),
                'country_id'=>$request->country_id,
            ];
            $customer->update($data);

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

            $customer->update($data);

        }
        Alert::success('UPDATED','تم تعديل البيانات بنجاح');
        return redirect()->route('customers.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customers::find($id)->delete();
        Alert::error('Deleted','تم حذف البيانات بنجاح');
        return redirect()->route('customers.index');
    }
}
