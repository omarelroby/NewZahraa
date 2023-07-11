<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\CountriesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Models\Category;
use App\Models\Country;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;



class CountryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CountriesDataTable $dataTable)
    {
         return $dataTable->render('dashboard.country.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Languages=Languages::all();
        return  view('dashboard.country.create',compact('Languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryRequest $request)
    {
        $data=$request->all();
        if ($request->has('image')){
            $file=$request->file('image')->getClientOriginalName();
            $data['image']=$request->file('image')->move('countries',$file);

        }
          Country::create($data) ;

        Alert::success('Success','تم إضافة البيانات بنجاح');
        return redirect()->route('country.index');


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

        $country=Country::find($id);
        return  view('dashboard.country.edit',compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CountryRequest $request, $id)
    {
        $country=Country::find($id);
        $data=$request->all();
        if ($request->has('image')){
            $file=$request->file('image')->getClientOriginalName();
            $data['image']=$request->file('image')->move('countries',$file);

        }
        $country->update($data);
        $country->save();
        Alert::success('UPDATED','تم تعديل البيانات بنجاح');
        return redirect()->route('country.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Country::find($id)->delete();
        Alert::error('Deleted','تم حذف البيانات بنجاح');
        return redirect()->route('country.index');
    }
}
