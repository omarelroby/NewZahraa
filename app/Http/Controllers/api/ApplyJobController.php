<?php

namespace App\Http\Controllers\api;

use App\DataTables\ApplyJobDataTable;
use App\Http\Controllers\Controller;
use App\Models\ApplyJob;
use App\Models\Employment;
use App\Traits\response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ApplyJobController extends Controller
{
    use response;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ApplyJobDataTable $dataTable)
    {
        return $dataTable->render('dashboard.apply_job.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'cv' => 'sometimes|mimes:png,jpg,jpeg,csv,txt,pdf',
            'job_id' => 'required',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        $data=$request->all();
        if($request->has('cv'))
        {
            $file=$request->file('cv')->getClientOriginalExtension();
            $path = Storage::disk('s3')->put('courses/'.time() . '_' . random_int(1, 100000) . '.' . $file, $request->cv, 'public');
            $data['cv'] = Storage::disk('s3')->url($path);
        }
        ApplyJob::create($data);
        return  $this->successMessage('Apply job Added Successfully');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ApplyJob::find($id)->delete();
        Alert::error('Deleted',__('dashboard.deleted'));
        return redirect()->route('applyJob');
    }
}
