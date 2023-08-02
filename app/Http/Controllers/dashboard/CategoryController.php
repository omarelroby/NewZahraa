<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
 use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Languages;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\CategoriesDataTable;



class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategoriesDataTable $dataTable)
    {
         return $dataTable->render('dashboard.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Languages=Languages::all();
        return  view('dashboard.category.create',compact('Languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $data =$request->validated();
//        foreach(config('translatable.locales') as $locale) {
//            $data+= $request->validate([
//                $locale.'.name' => 'required'
//            ]);
//        }
        $data['slug'] = Str::slug($data['en']['name'],'-');
        Category::create($data) ;
        Alert::success('Success','تم إضافة البيانات بنجاح');

        return redirect()->route('categories.index');


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

        $category=Category::find($id);
        return  view('dashboard.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category=Category::find($id);
        $category->update($request->validated());
        $category->save();
        Alert::success('UPDATED','تم تعديل البيانات بنجاح');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        Alert::error('Deleted','تم حذف البيانات بنجاح');
        return redirect()->route('categories.index');
    }
}
