<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\CountriesDataTable;
use App\DataTables\EbookDataTable;
use App\DataTables\PagesDataTable;
use App\DataTables\SettingDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\EbookRequest;
use App\Http\Requests\PagesRequest;
use App\Http\Requests\SettingRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\Ebook;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;



class SettingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SettingDataTable $dataTable)
    {
         return $dataTable->render('dashboard.setting.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Languages=Languages::all();
        return  view('dashboard.setting.create',compact('Languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store( $request)
//    {
//        $data=$request->all();
//
//          Page::create($data) ;
//
//        Alert::success('Success','تم إضافة البيانات بنجاح');
//
//        return back() ;
//
//
//    }

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
    public function edit(int $id)
    {

        $setting=Setting::find($id);
        return  view('dashboard.setting.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SettingRequest $request, $id)
    {
        $setting=Setting::find($id);
        $data=$request->all();

        $setting->update($data);
        $setting->save();
        Alert::success('UPDATED',__('dashboard.update'));
        return redirect()->route('setting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Setting::find($id)->delete();
        Alert::error('Deleted',__('dashboard.deleted'));
        return back();
    }
}
