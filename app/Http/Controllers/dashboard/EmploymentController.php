<?php

namespace App\Http\Controllers\dashboard;

use App\DataTables\EmploymentDataTable;
use App\Http\Controllers\Controller;
use App\Models\Employment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
 use RealRashid\SweetAlert\Facades\Alert;

class EmploymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(EmploymentDataTable $dataTable)
    {
        return $dataTable->render('dashboard.employment.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.employment.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $oValidatorRules = [
            'en.description' => 'required',
            'ar.description' => 'required',

        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        $data=$request->all();

        if($request->has('image'))
        {
            $file=$request->file('image')->getClientOriginalExtension();
            $path = Storage::disk('s3')->put('courses/'.time() . '_' . random_int(1, 100000) . '.' . $file, $request->image, 'public');
            $data['image'] = Storage::disk('s3')->url($path);
        }
        $data['slug'] = Str::slug($data['en']['title'],'-');
        Employment::create($data);
        Alert::success('Success',__('dashboard.success'));
        return redirect()->route('employment.index');
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
        $employment=Employment::find($id);
        return  view('dashboard.employment.edit',compact('employment' ));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$request->all();
        $employment=Employment::find($id);
        if($request->has('image'))
        {
            $file=$request->file('image')->getClientOriginalExtension();
            $path = Storage::disk('s3')->put('courses/'.time() . '_' . random_int(1, 100000) . '.' . $file, $request->image, 'public');
            $data['image'] = Storage::disk('s3')->url($path);
        }

         $employment->update($data);
        Alert::success('Success',__('dashboard.success'));
        return redirect()->route('employment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employment::find($id)->delete();
        Alert::error('Deleted',__('dashboard.deleted'));
        return redirect()->route('employment.index');
    }
}
