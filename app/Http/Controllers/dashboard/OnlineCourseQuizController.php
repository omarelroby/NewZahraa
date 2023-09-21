<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\CountriesDataTable;
use App\DataTables\CustomersDataTable;
use App\DataTables\EbookDataTable;
use App\DataTables\IndexDataTable;
use App\DataTables\InstructorsDataTable;
use App\DataTables\OnlineCourseGroupsDataTable;
use App\DataTables\OnlineCourseIndexDataTable;
use App\DataTables\OnlineCourseQuizDataTable;
use App\DataTables\PagesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\CoursesIndexRequest;
use App\Http\Requests\CoursesIndexVideosRequest;
use App\Http\Requests\CustomersRequest;
use App\Http\Requests\EbookRequest;
use App\Http\Requests\InstructorsRequest;
use App\Http\Requests\OnlineCoursesIndexRequest;
use App\Http\Requests\PagesRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\CourseIndexes;
use App\Models\CourseIndexesVideos;
use App\Models\Customers;
use App\Models\Ebook;
use App\Models\Groups;
use App\Models\Instructor;
use App\Models\InstructorAttachs;
use App\Models\MaterialGroups;
use App\Models\OnlineCourseIndexes;
use App\Models\OnlineCourseIndexesItems;
use App\Models\Page;
use App\Models\Quiz;
use App\Models\QuizGroups;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;
use function PHPUnit\Framework\countOf;


class OnlineCourseQuizController extends Controller
{


    public function index(OnlineCourseQuizDataTable $dataTable, $id)
    {
        return $dataTable->with('online_course_id', $id)->render('dashboard.online_course_quizes.index', compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $instructors=Instructor::all();
        return view('dashboard.online_course_quizes.create', compact('id','instructors'));
    }
    public function edit($id)
    {
        $quiz=Quiz::find($id);
        $groups=Groups::all();
        $instructors=Instructor::all();
        return view('dashboard.online_course_quizes.edit', compact( 'groups','quiz','instructors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->is_discount)
        {
            $is=1;
        }
        else
        {
            $is=0;
        }
         $quiz = Quiz::create([
             'quiz_name'=>$request->quiz_name,
             'degree'=>$request->degree,
             'online_course_id'=>$request->online_course_id,
             'instructor_id'=>$request->instructor_id,
             'is_discount'=>$is,
             'discount'=>$request->discount,
             'discount_score'=>$request->discount_score,
             'pass_score'=>$request->pass_score,
         ]);
        foreach ($request->group_id as $group)
        {
            QuizGroups::create([
                'quiz_id'=>$quiz->id,
                'group_id'=>$group,
            ]);

        }

        Alert::success('Success', __('dashboard.success'));
        return redirect()->route('onlineCourse.quiz', $request->online_course_id);


    }
    public function update(Request $request,$id)
    {
        $quiz=Quiz::find($id);
        if ($request->is_discount)
        {
            $is=1;
        }
        else
        {
            $is=0;
        }
        $quiz->update([
            'quiz_name'=>$request->quiz_name,
            'degree'=>$request->degree,
            'online_course_id'=>$request->online_course_id,
            'instructor_id'=>$request->instructor_id,
            'is_discount'=>$is,
            'discount'=>$request->discount,
            'discount_score'=>$request->discount_score,
            'pass_score'=>$request->pass_score,


        ]);


        Alert::success('Success', __('dashboard.update'));
        return redirect()->route('onlineCourse.quiz', $request->online_course_id);


    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */



    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quiz=Quiz::find($id);
        $quiz->delete();
        Alert::error('Deleted', __('dashboard.deleted'));
        return redirect()->route('onlineCourse.quiz', $quiz->online_course_id);
    }
    public function get_group($id)
    {
        $groups =Groups::where("instructor_id",$id)->pluck("name", "id");
        return json_encode($groups);
    }

}
