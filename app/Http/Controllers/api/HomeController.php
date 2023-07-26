<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\InstructorRequests;
use App\Traits\response;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    use response;
    public function lecturer(Request $request){

       $data= $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'cv'=>'required',
            'country_id'=>'required',
            'category_id'=>'required',
        ]);
            if ($request->has('cv')){
                $path='instructorRequests';
                $file=$request->file('cv')->getClientOriginalName();
                $data['cv']=$request->file('cv')->move($path,$file);
            }
            InstructorRequests::create($data);
            return $this->successMessage('تم إرسال الطلب بنجاح');

    }


}
