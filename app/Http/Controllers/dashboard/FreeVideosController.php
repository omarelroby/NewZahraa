<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\CountriesDataTable;
use App\DataTables\EbookDataTable;
use App\DataTables\FreeVideosDataTable;
use App\DataTables\PagesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\EbookRequest;
use App\Http\Requests\FreeVideoRequest;
use App\Http\Requests\PagesRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\Ebook;
use App\Models\FreeVideo;
use App\Models\Page;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;



class FreeVideosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FreeVideosDataTable $dataTable)
    {
         return $dataTable->render('dashboard.free_videos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Languages=Languages::all();
        return  view('dashboard.free_videos.create',compact('Languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FreeVideoRequest $request)
    {
        $data=$request->all();
        $data['slug'] = Str::slug($data['en']['title'],'-');
        FreeVideo::create($data) ;
        Alert::success('Success','تم إضافة البيانات بنجاح');
        return redirect()->route('freeVideos.index');


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

        $freeVideos=FreeVideo::find($id);
        return  view('dashboard.free_videos.edit',compact('freeVideos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FreeVideoRequest $request, $id)
    {
        $freeVideos=FreeVideo::find($id);
        $data=$request->all();
        $freeVideos->update($data);
        $freeVideos->save();
        Alert::success('UPDATED','تم تعديل البيانات بنجاح');
        return redirect()->route('freeVideos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FreeVideo::find($id)->delete();
        Alert::error('Deleted','تم حذف البيانات بنجاح');
        return redirect()->route('freeVideos.index');
    }
}
