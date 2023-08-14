<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\CountriesDataTable;
use App\DataTables\CustomersDataTable;
use App\DataTables\EbookDataTable;
use App\DataTables\IndexDataTable;
use App\DataTables\InstructorsDataTable;
use App\DataTables\MaterialsDataTable;
use App\DataTables\OnlineCourseGroupsDataTable;
use App\DataTables\OnlineCourseIndexDataTable;
use App\DataTables\PagesDataTable;
use App\DataTables\QuizesDataTable;
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
use App\Models\Instructor;
use App\Models\InstructorAttachs;
use App\Models\MaterialGroups;
use App\Models\Materials;
use App\Models\OnlineCourseIndexes;
use App\Models\OnlineCourseIndexesItems;
use App\Models\Page;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;
use function PHPUnit\Framework\countOf;


class ShowQuizController extends Controller
{


    public function index(QuizesDataTable $dataTable, $id)
    {

        return $dataTable->with('group_id', $id)->render('dashboard.quiz_group.index', compact('id'));
    }


    public function create_index($id)
    {
        return view('dashboard.online_course_index.create', compact('id'));
    }


    public function store(OnlineCoursesIndexRequest $request)
    {
//        dd($request->course_id);
        $index = OnlineCourseIndexes::create($request->all());

          foreach ($request->repeater as $key => $input) {
              $input['online_course_indexes_id'] = $index->id;
              OnlineCourseIndexesItems::create($input);
          }

        Alert::success('Success', __('dashboard.success'));
        return redirect()->route('onlineCourse.index', $request->online_course_id);


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
        $course=OnlineCourseIndexes::find($id);
        $course->delete();
        Alert::error('Deleted', __('dashboard.deleted'));
        return redirect()->route('onlineCourse.index', $course->online_course_id);
    }

}
