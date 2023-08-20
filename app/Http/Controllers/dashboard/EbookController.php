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
        $categories=Category::where('type','=','Ebook')->with('translations')->get();
        return  view('dashboard.ebook.create',compact('Languages','categories'));
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
            $file=$request->file('image')->getClientOriginalExtension();
            $data['image']=$request->file('image')->move('public/ebooks',time() . '_' . random_int(1, 100000) . '.' . $file);

        }
        if ($request->has('sample_file')){
            $file=$request->file('sample_file')->getClientOriginalExtension();
            $data['sample_file']=$request->file('sample_file')->move('public/ebooks',time() . '_' . random_int(1, 100000) . '.' . $file);

        }
        if ($request->has('complete_file')){
            $file=$request->file('complete_file')->getClientOriginalExtension();
            $data['complete_file']=$request->file('complete_file')->move('public/ebooks',time() . '_' . random_int(1, 100000) . '.' . $file);

        }
        $data['slug'] = Str::slug($data['en']['title'],'-');
        Ebook::create($data) ;

        Alert::success('Success',__('dashboard.success'));

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
        $categories=Category::where('type','=','Ebook')->with('translations')->get();
        return  view('dashboard.ebook.edit',compact('ebook','categories'));
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
            $file=$request->file('image')->getClientOriginalExtension();
            $data['image']=$request->file('image')->move('public/ebooks',time() . '_' . random_int(1, 100000) . '.' . $file);

        }
        if ($request->has('sample_file')){
            $file=$request->file('sample_file')->getClientOriginalExtension();
            $data['sample_file']=$request->file('sample_file')->move('public/ebooks',time() . '_' . random_int(1, 100000) . '.' . $file);

        }
        if ($request->has('complete_file')){
            $file=$request->file('complete_file')->getClientOriginalExtension();
            $data['complete_file']=$request->file('complete_file')->move('public/ebooks',time() . '_' . random_int(1, 100000) . '.' . $file);

        }
        $ebook->update($data);
        $ebook->save();
        Alert::success('UPDATED',__('dashboard.update'));
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
        Alert::error('Deleted',__('dashboard.deleted'));

        return redirect()->route('ebook.index');
    }
}
