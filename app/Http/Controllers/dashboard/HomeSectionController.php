<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\AttachmentsDataTable;
use App\DataTables\CountriesDataTable;
use App\DataTables\CoursesDataTable;
use App\DataTables\EbookDataTable;
use App\DataTables\HomeSectionDataTable;
use App\DataTables\InstructorsDataTable;
use App\DataTables\PagesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\CoursesRequest;
use App\Http\Requests\EbookRequest;
use App\Http\Requests\HomeSectionRequest;
use App\Http\Requests\InstructorsRequest;
use App\Http\Requests\PagesRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\Course;
use App\Models\Ebook;
use App\Models\HomeSection;
use App\Models\Instructor;
use App\Models\InstructorAttachs;
use App\Models\Page;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;



class HomeSectionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(HomeSectionDataTable $dataTable)
    {
        return $dataTable->render('dashboard.home_section.index');
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
        $home=HomeSection::find($id);
        return  view('dashboard.home_section.edit',compact('home'));
    }
    public function create()
    {
        return  view('dashboard.home_section.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(HomeSectionRequest $request)
    {
        $data=$request->all();
        if($request->has('image')){
            $path='HomeSection';
            $file=$request->file('image')->getClientOriginalExtension();
            $data['image']=$request->file('public/image')->move($path,time() . '_' . random_int(1, 100000) . '.' . $file);
        }
        HomeSection::create($data);
        Alert::success('Success',__('dashboard.success'));
        return redirect()->route('home-section.index');


    }
    public function update(HomeSectionRequest $request, $id)
    {
        $homeSection=HomeSection::find($id);
        $data=$request->all();
        $homeSection->update($data);

        Alert::success('UPDATED',__('dashboard.update'));
        return redirect()->route('home-section.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HomeSection::find($id)->delete();
        Alert::error('Deleted',__('dashboard.deleted'));

        return redirect()->route('home-section.index');
    }
}
