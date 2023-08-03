<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\CountriesDataTable;
use App\DataTables\EbookDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CountryRequest;
use App\Http\Requests\EbookRequest;
use App\Models\Category;
use App\Models\Country;
use App\Models\Ebook;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;
use Cviebrock\EloquentSluggable\Services\SlugService;


class EbookController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(EbookDataTable $dataTable)
    {
         return $dataTable->render('dashboard.ebook.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Languages=Languages::all();
        return  view('dashboard.ebook.create',compact('Languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EbookRequest $request)
    {
        $data=$request->all();
        if ($request->has('image')){
            $file=$request->file('image')->getClientOriginalName();
            $data['image']=$request->file('image')->move('public/ebooks',$file);

        }
        if ($request->has('sample_file')){
            $file=$request->file('sample_file')->getClientOriginalName();
            $data['sample_file']=$request->file('sample_file')->move('public/ebooks',$file);

        }
        if ($request->has('complete_file')){
            $file=$request->file('complete_file')->getClientOriginalName();
            $data['complete_file']=$request->file('complete_file')->move('public/ebooks',$file);

        }
        $data['slug'] = Str::slug($data['en']['title'],'-');
        Ebook::create($data) ;

        Alert::success('Success','تم إضافة البيانات بنجاح');

        return redirect()->route('ebook.index');


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

        $ebook=Ebook::find($id);
        return  view('dashboard.ebook.edit',compact('ebook'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EbookRequest $request, $id)
    {
        $ebook=Ebook::find($id);
        $data=$request->all();
        if ($request->has('image')){
            $file=$request->file('image')->getClientOriginalName();
            $data['image']=$request->file('image')->move('public/ebooks',$file);

        }
        if ($request->has('sample_file')){
            $file=$request->file('sample_file')->getClientOriginalName();
            $data['sample_file']=$request->file('sample_file')->move('public/ebooks',$file);

        }
        if ($request->has('complete_file')){
            $file=$request->file('complete_file')->getClientOriginalName();
            $data['complete_file']=$request->file('complete_file')->move('public/ebooks',$file);

        }
        $ebook->update($data);
        $ebook->save();
        Alert::success('UPDATED','تم تعديل البيانات بنجاح');
        return redirect()->route('ebook.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ebook::find($id)->delete();
        Alert::error('Deleted','تم حذف البيانات بنجاح');

        return redirect()->route('ebook.index');
    }
}
