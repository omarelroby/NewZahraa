<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\AttachmentsDataTable;
use App\DataTables\CountriesDataTable;
use App\DataTables\CoursesDataTable;
use App\DataTables\EbookDataTable;
use App\DataTables\IndexDataTable;
use App\DataTables\InstructorsDataTable;
use App\DataTables\PagesDataTable;
use App\DataTables\VideosDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\CoursesRequest;
use App\Http\Requests\EbookRequest;
use App\Http\Requests\IndexRequest;
use App\Http\Requests\InstructorsRequest;
use App\Http\Requests\PagesRequest;
use App\Http\Requests\VideosRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\Course;
use App\Models\CourseIndexes;
use App\Models\Ebook;
use App\Models\Instructor;
use App\Models\InstructorAttachs;
use App\Models\Page;
use App\Models\Videos;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;



class IndexController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IndexDataTable $dataTable)
    {
        return $dataTable->render('dashboard.index.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        $dataTable=  new IndexDataTable ;
         Session::put('course_id',$id);
        return $dataTable->render('dashboard.index.index',compact('id'));

    }
    public function create_index($id)
    {
        $course=Course::findOrFail($id);
        return view('dashboard.index.create',compact('course','id'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instructors=Instructor::all();
        $videos=Videos::find($id);
        return  view('dashboard.videos.edit',compact('videos','instructors'));
    }
    public function create()
    {
         return  view('dashboard.index.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(IndexRequest $request)
    {
        $data=$request->all();
        CourseIndexes::create($data);
        Alert::success('Success','تم إضافة البيانات بنجاح');
        return redirect()->route('index.show',$request->course_id);


    }
    public function update(CoursesRequest $request, $id)
    {
        $videos=Videos::find($id);
        $data=$request->all();
        $videos->update($data);

        Alert::success('UPDATED','تم تعديل البيانات بنجاح');
        return redirect()->route('videos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CourseIndexes::find($id)->delete();
        $id=Session::get('course_id');
        Alert::error('Deleted','تم حذف البيانات بنجاح');
        return redirect()->route('index.show',$id);
    }


}
