<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\AttachmentsDataTable;
use App\DataTables\CountriesDataTable;
use App\DataTables\CoursesDataTable;
use App\DataTables\EbookDataTable;
use App\DataTables\HomeSectionDataTable;
use App\DataTables\InstructorsDataTable;
use App\DataTables\OnlineCoursesDataTable;
use App\DataTables\PagesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\CoursesRequest;
use App\Http\Requests\EbookRequest;
use App\Http\Requests\HomeSectionRequest;
use App\Http\Requests\InstructorsRequest;
use App\Http\Requests\OnlineCoursesRequest;
use App\Http\Requests\PagesRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\Course;
use App\Models\Ebook;
use App\Models\HomeSection;
use App\Models\Instructor;
use App\Models\InstructorAttachs;
use App\Models\OnlineCourse;
use App\Models\OnlineCourseAndInstructors;
use App\Models\Page;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;



class OnlineCoursesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(OnlineCoursesDataTable $dataTable)
    {
        return $dataTable->render('dashboard.online_courses.index');
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
        $course=OnlineCourse::find($id);
        $allInstructors=Instructor::all();
        $categories=Category::where('type','=','Online-course')->with('translations')->get();
        $instructors=OnlineCourseAndInstructors::where('online_course_id',$course->id)->pluck('instructor_id')->toArray();
        return  view('dashboard.online_courses.edit',compact('categories','allInstructors','course','instructors'));
    }
    public function create()
    {
        $instructors=Instructor::all();
        $categories=Category::where('type','=','Online-course')->with('translations')->get();
        return  view('dashboard.online_courses.create',compact('categories','instructors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(OnlineCoursesRequest $request)
    {
        $data=$request->all();
        if($request->has('image'))
        {
            $file=$request->file('image')->getClientOriginalExtension();
            $path = Storage::disk('s3')->put('OnlineCourses/'.time() . '_' . random_int(1, 100000) . '.' . $file, $request->image, 'public');
            $data['image'] = Storage::disk('s3')->url($path);
        }
        $data['slug'] = Str::slug($data['en']['title'],'-');
        $course=OnlineCourse::create($data);
        if ($request->has('instructor_id'))
        {
            foreach ($request->instructor_id as $instructor){
                OnlineCourseAndInstructors::create([
                    'instructor_id'=>$instructor,
                    'online_course_id'=>$course->id
                ]);
            }
        }
        Alert::success('Success',__('dashboard.success'));
        return redirect()->route('online-courses.index');


    }
    public function update(OnlineCoursesRequest $request, $id)
    {
        $course=OnlineCourse::findOrFAil($id);
        $data=$request->all();
        if($request->has('image'))
        {
            $file=$request->file('image')->getClientOriginalExtension();
            $path = Storage::disk('s3')->put('OnlineCourses/'.time() . '_' . random_int(1, 100000) . '.' . $file, $request->image, 'public');
            $data['image'] = Storage::disk('s3')->url($path);
        }
        $course->update($data);
        if ($request->has('instructor_id'))
        {
        $instructors=OnlineCourseAndInstructors::where('online_course_id',$course->id)->get();
        if ($instructors){
            foreach ($instructors as $instructor){
                $instructor->delete();
            }
        }
            foreach ($request->instructor_id as $newInstructor){
                OnlineCourseAndInstructors::create([
                    'instructor_id'=>$newInstructor,
                    'online_course_id'=>$course->id
                ]);
            }
        }

        Alert::success('UPDATED',__('dashboard.update'));
        return redirect()->route('online-courses.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OnlineCourse::find($id)->delete();
        Alert::error('Deleted',__('dashboard.deleted'));

        return redirect()->route('online-courses.index');
    }
}
