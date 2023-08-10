<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\AttachmentsDataTable;
use App\DataTables\CountriesDataTable;
use App\DataTables\CoursesDataTable;
use App\DataTables\EbookDataTable;
use App\DataTables\InstructorsDataTable;
use App\DataTables\PagesDataTable;
use App\DataTables\VideosDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\CoursesRequest;
use App\Http\Requests\EbookRequest;
use App\Http\Requests\InstructorsRequest;
use App\Http\Requests\PagesRequest;
use App\Http\Requests\VideosRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\Course;
use App\Models\Ebook;
use App\Models\Instructor;
use App\Models\InstructorAttachs;
use App\Models\Page;
use App\Models\Videos;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;



class VideosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(VideosDataTable $dataTable)
    {
        return $dataTable->render('dashboard.videos.index');
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
        $instructors=Instructor::all();
        $videos=Videos::find($id);
        return  view('dashboard.videos.edit',compact('videos','instructors'));
    }
    public function create()
    {
        $instructors=Instructor::all();
        return  view('dashboard.videos.create',compact('instructors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(VideosRequest $request)
    {
        $data=$request->all();
        if($request->has('preview_video')){
            $path='public/coursesVideos';
            $file=$request->file('preview_video')->getClientOriginalExtension();
            $data['preview_video']=$request->file('preview_video')->move($path,time() . '_' . random_int(1, 100000) . '.' . $file);
        }
        if($request->has('complete_video')){
            $path='public/coursesVideos';
            $file=$request->file('complete_video')->getClientOriginalExtension();
            $data['complete_video']=$request->file('complete_video')->move($path,time() . '_' . random_int(1, 100000) . '.' . $file);
        }
        $data['slug'] = Str::slug($data['en']['title'],'-');
        Videos::create($data);
        Alert::success('Success',__('dashboard.success'));
        return redirect()->route('videos.index');


    }
    public function update(CoursesRequest $request, $id)
    {
        $videos=Videos::find($id);
        $data=$request->all();
        $videos->update($data);

        Alert::success('UPDATED',__('dashboard.update'));
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
        Videos::find($id)->delete();
        Alert::error('Deleted',__('dashboard.deleted'));

        return redirect()->route('videos.index');
    }
}
