<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CountryResource;
use App\Models\Category;
use App\Models\Country;
use App\Models\Customers;
use App\Models\InstructorRequests;
use App\Traits\response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use mysql_xdevapi\Exception;


class CustomerController extends Controller
{
    use response;

     public function customer_register(Request $request){
             $oValidatorRules = [
                 'name' => 'required',
                 'email' => 'required',
                 'phone' => 'required',
                 'password' => 'required',
                 'country_id' => 'required|exists:countries,id',
             ];
             $validator = Validator::make($request->all(), $oValidatorRules);
             if ($validator->fails()) {
                 return $this->error($validator->messages());
             }
             $data = $request->all();
             if($request->has('password')){
                 $data['password']=bcrypt($request->password);
             }
             Customers::create($data);
             return $this->successMessage(__('message.success'));



    }



}
