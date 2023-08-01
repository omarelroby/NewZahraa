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
use Illuminate\Support\Facades\DB;
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
                 'email' => 'required|unique:customers,email',
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
    public function update_profile(Request $request){
         $customer=auth('api')->user();
        $oValidatorRules = [
            'name' => 'required',
            'email' => 'required|unique:customers,email',
            'password' => 'nullable|min:8',
         ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        if ($customer)
         {
             $customer->update([
                 'name'=>$request->name,
                 'email'=>$request->email,
                 'password'=>bcrypt($request->password),
             ]);
             if ($request->has('image'))
             {
                 $customer->update(['image'=>$request->image]);
             }

             return  $this->successMessage('your profile updated successfully');
         }
    }
    public function favourite_ebooks(Request $request){
        $customer=auth('api')->user();
        $valiation=DB::table('favourite_ebooks')
            ->where('customer_id',$customer->id)
            ->where('ebooks_id',$request->ebooks_id)
            ->first();
        $oValidatorRules = [
             'ebooks_id' => 'required|exists:ebooks,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        if ($valiation){
            return $this->successMessage('this Ebooks already added as favourite');
        }
        if ($customer)
        {
            DB::table('favourite_ebooks')->insert([
                'customer_id'=>$customer->id,
                 'ebooks_id'=>$request->ebooks_id,
            ]);
            return  $this->successMessage('your favourite ebooks added successfully');

        }
        }
    public function favourite_free_videos(Request $request)
    {
        $customer=auth('api')->user();
        $valiation=DB::table('favourite_free_videos')
            ->where('customer_id',$customer->id)
            ->where('free_videos_id',$request->free_videos_id)
            ->first();
        $oValidatorRules = [
            'free_videos_id' => 'required|exists:free_videos,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        if ($valiation){
            return $this->successMessage('This Free Video Already Added As Favourite');
        }
        if ($customer)
        {
            DB::table('favourite_free_videos')->insert([
                'customer_id'=>$customer->id,
                'free_videos_id'=>$request->free_videos_id,
            ]);
            return  $this->successMessage('Your Favourite Free Video Added Successfully');

        }
    }
    public function favourite_online_courses(Request $request)
    {
        $customer=auth('api')->user();
        $valiation=DB::table('favourite_online_courses')
            ->where('customer_id',$customer->id)
            ->where('online_course_id',$request->online_course_id)
            ->first();
        $oValidatorRules = [
            'online_course_id' => 'required|exists:online_courses,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        if ($valiation){
            return $this->successMessage('This Course Already Added As Favourite');
        }
        if ($customer)
        {
            DB::table('favourite_online_courses')->insert([
                'customer_id'=>$customer->id,
                'online_course_id'=>$request->online_course_id,
            ]);
            return  $this->successMessage('Your Course Video Added Successfully');

        }
    }





}
