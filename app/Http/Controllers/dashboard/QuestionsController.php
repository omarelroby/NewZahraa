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
use App\DataTables\QuestionsDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\CoursesRequest;
use App\Http\Requests\EbookRequest;
use App\Http\Requests\HomeSectionRequest;
use App\Http\Requests\InstructorsRequest;
use App\Http\Requests\OnlineCoursesRequest;
use App\Http\Requests\PagesRequest;
use App\Http\Requests\QuestionsRequest;
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
use App\Models\Questions;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;



class QuestionsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(QuestionsDataTable $dataTable)
    {
        return $dataTable->render('dashboard.questions.index');
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

        $question=Questions::find($id);
        return  view('dashboard.questions.edit',compact('question'));
    }
    public function create()
    {
         return  view('dashboard.questions.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionsRequest $request)
    {
        Questions::create($request->except(['_token']));
        Alert::success('Success',__('dashboard.success'));
        return redirect()->route('question.index');


    }
    public function update(QuestionsRequest $request, $id)
    {
        $q=Questions::find($id);
        $q->update($request->except(['_token','_method']));
        Alert::success('UPDATED',__('dashboard.update'));
        return redirect()->route('question.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Questions::find($id)->delete();
        Alert::error('Deleted',__('dashboard.deleted'));
        return redirect()->route('question.index');
    }
}
