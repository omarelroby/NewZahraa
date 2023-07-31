<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CountryResource;
use App\Http\Resources\CustomerResource;
use App\Http\Resources\InstructorResource;
use App\Models\Category;
use App\Models\Country;
use App\Models\Customers;
use App\Models\Instructor;
use App\Models\InstructorRequests;
use App\Traits\response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use mysql_xdevapi\Exception;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;


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
    public function login(Request $request)
    {
         $customer = Customers::where('email', $request->email)
            ->first();

        $instructor=Instructor::where('email', $request->email)
            ->first();

        if ($customer) {
           if (Hash::check($request->password , $customer->password)) {
               $data = [
                   'type' => 'customer',
                   'customer' => new CustomerResource($customer),
                   'token' => $customer->createToken($customer->name)->accessToken,
               ];
               return $this->success($data);
           }
           else {
               return $this->error('password not correct');
           }
       }
       else
       {
           if ($instructor)
           {
               if (Hash::check($request->password , $instructor->password))
               {
                   $data = [
                       'type' => 'instructor',
                       'instructor' => new InstructorResource($instructor),
                       'token' => $instructor->createToken($instructor->name)->accessToken,
                   ];
                   return $this->success($data);
               }
               else
               {
                   return $this->error('password not correct');
               }

           }
           else
           {
               return $this->error('check your email, email not corrected');
           }

    }
    }



}
