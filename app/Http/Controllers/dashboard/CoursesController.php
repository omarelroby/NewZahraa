<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\AttachmentsDataTable;
use App\DataTables\CountriesDataTable;
use App\DataTables\CoursesDataTable;
use App\DataTables\EbookDataTable;
use App\DataTables\InstructorsDataTable;
use App\DataTables\PagesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\CoursesRequest;
use App\Http\Requests\EbookRequest;
use App\Http\Requests\InstructorsRequest;
use App\Http\Requests\PagesRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\Course;
use App\Models\Ebook;
use App\Models\Instructor;
use App\Models\InstructorAttachs;
use App\Models\Page;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;



class CoursesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CoursesDataTable $dataTable)
    {
        return $dataTable->render('dashboard.courses.index');
    }



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
         $courses=Course::find($id);
        $categories=Category::with('translations')->get();
        return  view('dashboard.courses.edit',compact('courses','categories' ));
    }
    public function create()
    {
        $categories=Category::with('translations')->get();
        return  view('dashboard.courses.create',compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(CoursesRequest $request)
    {
        $data=$request->all();
        if($request->has('preview_video')){
            $path='public/coursesVideos';
            $file=$request->file('preview_video')->getClientOriginalExtension();
            $data['preview_video']=$request->file('preview_video')->move($path,time() . '_' . random_int(1, 100000) . '.' . $file);
        }
        $data['slug'] = Str::slug($data['en']['title'],'-');
        Course::create($data);
        Alert::success('Success',__('dashboard.success'));
        return redirect()->route('courses.index');


    }
    public function update(CoursesRequest $request, $id)
    {
        $courses=Course::find($id);
        $data=$request->all();
        $courses->update($data);

        Alert::success('UPDATED',__('dashboard.update'));
        return redirect()->route('courses.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::find($id)->delete();
        Alert::error('Deleted',__('dashboard.deleted'));

        return redirect()->route('courses.index');
    }
}
