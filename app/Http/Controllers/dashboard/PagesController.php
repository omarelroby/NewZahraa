<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\CountriesDataTable;
use App\DataTables\EbookDataTable;
use App\DataTables\PagesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\EbookRequest;
use App\Http\Requests\PagesRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\Ebook;
use App\Models\Page;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;



class PagesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PagesDataTable $dataTable)
    {
         return $dataTable->render('dashboard.pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Languages=Languages::all();
        return  view('dashboard.pages.create',compact('Languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PagesRequest $request)
    {
        $data=$request->all();
        if ($request->has('image')){
            $file=$request->file('image')->getClientOriginalName();
            $data['image']=$request->file('image')->move('public/pages',$file);

        }

        if ($request->has('upload_video')){
            $file=$request->file('upload_video')->getClientOriginalName();
            $data['upload_video']=$request->file('upload_video')->move('public/pages',$file);

        }
        $data['slug'] = Str::slug($data['en']['title'],'-');
        Page::create($data) ;

        Alert::success('Success','تم إضافة البيانات بنجاح');

        return redirect()->route('page.index');


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

        $pages=Page::find($id);
        return  view('dashboard.pages.edit',compact('pages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PagesRequest $request, $id)
    {
        $pages=Page::find($id);
        $data=$request->all();
        if ($request->has('image')){
            $file=$request->file('image')->getClientOriginalName();
            $data['image']=$request->file('image')->move('public/pages',$file);

        }

        if ($request->has('upload_video')){
            $file=$request->file('upload_video')->getClientOriginalName();
            $data['upload_video']=$request->file('upload_video')->move('public/pages',$file);

        }
        $pages->update($data);
        $pages->save();
        Alert::success('UPDATED','تم تعديل البيانات بنجاح');
        return redirect()->route('page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page::find($id)->delete();
        Alert::error('Deleted','تم حذف البيانات بنجاح');

        return redirect()->route('pages.index');
    }
}
