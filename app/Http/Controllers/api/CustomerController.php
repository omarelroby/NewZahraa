<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CountryResource;
use App\Http\Resources\CourseOrderResource;
use App\Http\Resources\CoursesIndexesOnlyVideosResource;
use App\Http\Resources\CoursesIndexesResource;
use App\Http\Resources\CoursesResource;
use App\Http\Resources\CustomerResource;
use App\Http\Resources\EbookOrderResource;
use App\Http\Resources\EbooksResource;
use App\Http\Resources\FavouriteCoursesResource;
use App\Http\Resources\FavouriteEbooksResource;
use App\Http\Resources\FavouriteFreeVideosResource;
use App\Http\Resources\FavouriteOnlineCoursesResource;
use App\Http\Resources\FavouriteVideosResource;
use App\Http\Resources\FreeVideosResource;
use App\Http\Resources\GroupResource;
use App\Http\Resources\InstructorResource;
use App\Http\Resources\MaterialsResource;
use App\Http\Resources\OnlineCourseOrderResource;
use App\Http\Resources\OnlineCourseResource;
use App\Http\Resources\PagesResource;
use App\Http\Resources\QuizResource;
use App\Http\Resources\VideosResource;
use App\Models\Category;
use App\Models\Country;
use App\Models\Course;
use App\Models\CourseIndexes;
use App\Models\CourseIndexesVideos;
use App\Models\CourseOrders;
use App\Models\Customers;
use App\Models\Ebook;
use App\Models\EbookOrders;
use App\Models\FreeVideo;
use App\Models\Groups;
use App\Models\IndexesVideo;
use App\Models\Instructor;
use App\Models\InstructorRequests;
use App\Models\Materials;
use App\Models\OnlineCourse;
use App\Models\OnlineCourseOrders;
use App\Models\Page;
use App\Models\Quiz;
use App\Models\UserVideos;
use App\Models\Videos;
use App\Traits\response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use mysql_xdevapi\Exception;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;


class CustomerController extends Controller
{
    use response;

    public function customer_register(Request $request)
    {
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
        if ($request->has('password')) {
            $data['password'] = bcrypt($request->password);
        }
        Customers::create($data);
        return $this->successMessage(__('message.success'));
    }

    public function login(Request $request)
    {
        $customer = Customers::where('email', $request->email)
            ->first();

        $instructor = Instructor::where('email', $request->email)
           ->first();

        if ($customer) {
            if (Hash::check($request->password, $customer->password)) {
                $data = [
                    'type' => 'customer',
                    'customer' => new CustomerResource($customer),
                    'token' => $customer->createToken($customer->name)->accessToken,
                ];
                return $this->success($data);
            } else {
                return $this->error('password not correct');
            }
        } else {
            if ($instructor) {
                if ($instructor->status==0)
                {
                    return $this->error('Sorry Your Account is Blocked Currently');

                }
                else
                {
                    if (Hash::check($request->password, $instructor->password)) {
                        $data = [
                            'type' => 'instructor',
                            'instructor' => new InstructorResource($instructor),
                            'token' => $instructor->createToken($instructor->name)->accessToken,
                        ];
                        return $this->success($data);
                    } else {
                        return $this->error('password not correct');
                    }
                }


            } else {
                return $this->error('check your email, email not corrected');
            }

        }
    }
    public function social_login(Request $request)
    {
        $oValidatorRules = [
            'email' => 'required|email',
            'token' => 'required',

        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        $customer = Customers::where('email', $request->email)
            ->first();

        $instructor = Instructor::where('email', $request->email)
            ->first();

        if ($customer) {
            $data = [
                'type' => 'customer',
                'customer' => new CustomerResource($customer),
                'token' => $customer->createToken($customer->email)->accessToken,
            ];
            return $this->success($data);

        } else {
            if ($instructor) {
                $data = [
                    'type' => 'instructor',
                    'instructor' => new InstructorResource($instructor),
                    'token' => $instructor->createToken($instructor->email)->accessToken,
                ];
                return $this->success($data);


            } else {
                $customer = new Customers();
                $customer->email = $request->email;
                $customer->save();
                $data = [
                    'type' => 'customer',
                    'customer' => new CustomerResource($customer),
                    'token' => $customer->createToken($customer->email)->accessToken,
                ];
                return $this->success($data);
            }

        }
    }

    public function forget_password(Request $request)
    {
        $customer = Customers::where('email', $request->email)
            ->first();

        $instructor = Instructor::where('email', $request->email)
            ->first();

        if ($customer) {
            $code =rand ( 10000 , 99999 );
            $customer->update(['code'=>$code]);
            $data=['name'=>$customer->name,'code'=>$customer->code,'email'=>$customer->email];
            Mail::to($customer->email)->send(new \App\Mail\ForgetPasswordMail($data));
            return  $this->successMessage("Check your Email to reset password");
        }
        elseif($instructor) {
            $code =rand ( 10000 , 99999 );
            $instructor->update(['code'=>$code]);
            $data=['name'=>$instructor->name,'code'=>$instructor->code,'email'=>$instructor->email];
            Mail::to($instructor->email)->send(new \App\Mail\ForgetPasswordMail($data));
            return  $this->successMessage("Check your Email to reset password");

        }
         else {
        return $this->error('check your email, email not corrected');
    }
    }
    public function reset_password(Request $request)
    {
        $customer = Customers::where('email', $request->email)
            ->first();
        $instructor = Instructor::where('email', $request->email)
            ->first();

        if ($customer) {
            if ($customer->code==$request->code)
            {
                $customer->update(['password'=>bcrypt($request->password),'code'=>null]);
                return $this->successMessage('Password Changed Successfully');
            }
            else
            {
                return  $this->error('Code Not Corrected');
            }
        }
        elseif($instructor) {
            if ($instructor->code==$request->code)
            {
                $instructor->update(['password'=>bcrypt($request->password),'code'=>null]);
                return $this->successMessage('Password Changed Successfully');
            }
            else
            {
                return  $this->error('Code Not Corrected');
            }

        }
         else {
        return $this->error('check your email, email not corrected');
    }
    }

    public function logout()
    {
         $user = auth('api')->user();
        $user->token()->revoke();
        return $this->successMessage('Logout Done');


    }

    public function favourite_videos(Request $request)
    {
        $customer = auth('api')->user();
        $valiation = DB::table('favourite_videos')
            ->where('customer_id', $customer->id)
            ->where('videos_id', $request->videos_id)
            ->first();
        $oValidatorRules = [
            'videos_id' => 'required|exists:videos,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        if ($valiation) {
            return $this->error('this video already added as favourite');
        }
        if ($customer) {
            DB::table('favourite_videos')->insert([
                'customer_id' => $customer->id,
                'videos_id' => $request->videos_id,
            ]);
            return $this->successMessage('your favourite video added successfully');

        }
    }
    public function favourite_course(Request $request)
    {
        $customer = auth('api')->user();
        $valiation = DB::table('favourite_courses')
            ->where('customer_id', $customer->id)
            ->where('course_id', $request->course_id)
            ->first();
        $oValidatorRules = [
            'course_id' => 'required|exists:courses,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        if ($valiation) {
            return $this->error('this course already added as favourite');
        }
        if ($customer) {
            DB::table('favourite_courses')->insert([
                'customer_id' => $customer->id,
                'course_id' => $request->course_id,
            ]);
            return $this->successMessage('your favourite course added successfully');

        }
    }

    public function update_profile(Request $request)
    {
        $customer = auth('api')->user();
        $oValidatorRules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'nullable|min:8',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails())
        {
            return $this->error($validator->messages());
        }
        if ($customer) {
             $customer->update([
                'name' => $request->name,
                'email' => $request->email,
             ]);
             if($request->password && $request->password!='')
             {
                 $customer->update([
                      'password' => bcrypt($request->password),
                 ]);
             }
            if ($request->has('image')) {
                $customer->update(['image' => $request->image]);
            }
            return $this->successMessage('your profile updated successfully');
        }

    }

    public function favourite_ebooks(Request $request)
    {
        $customer = auth('api')->user();
        $valiation = DB::table('favourite_ebooks')
            ->where('customer_id', $customer->id)
            ->where('ebooks_id', $request->ebooks_id)
            ->first();
        $oValidatorRules = [
            'ebooks_id' => 'required|exists:ebooks,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        if ($valiation) {
            return $this->error('this Ebooks already added as favourite');
        }
        if ($customer) {
            DB::table('favourite_ebooks')->insert([
                'customer_id' => $customer->id,
                'ebooks_id' => $request->ebooks_id,
            ]);
            return $this->successMessage('your favourite ebooks added successfully');

        }
    }

    public function delete_favourite_ebooks(Request $request)
    {
        $customer = auth('api')->user();
        $valiation = DB::table('favourite_ebooks')
            ->where('customer_id', $customer->id)
            ->where('ebooks_id', $request->ebooks_id)
            ->first();
        $query = DB::table('favourite_ebooks')
            ->where('customer_id', $customer->id)
            ->where('ebooks_id', $request->ebooks_id);
        $oValidatorRules = [
            'ebooks_id' => 'required|exists:ebooks,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        if (!$valiation) {
            return $this->error('This Ebooks Not Found');
        }
        if ($customer) {
            $query->delete();
            return $this->successMessage('Your  ebooks Deleted successfully');

        }
    }
    public function delete_favourite_courses(Request $request)
    {
        $customer = auth('api')->user();
        $valiation = DB::table('favourite_courses')
            ->where('customer_id', $customer->id)
            ->where('course_id', $request->course_id)
            ->first();
        $query = DB::table('favourite_courses')
            ->where('customer_id', $customer->id)
            ->where('course_id', $request->course_id);
        $oValidatorRules = [
            'course_id' => 'required|exists:courses,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        if (!$valiation) {
            return $this->error('This Course Not Found');
        }
        if ($customer) {
            $query->delete();
            return $this->successMessage('Your  Course Deleted successfully');

        }
    }

    public function delete_favourite_videos(Request $request)
    {
        $customer = auth('api')->user();
        $valiation = DB::table('favourite_videos')
            ->where('customer_id', $customer->id)
            ->where('videos_id', $request->videos_id)
            ->first();
        $query = DB::table('favourite_videos')
            ->where('customer_id', $customer->id)
            ->where('videos_id', $request->videos_id);
        $oValidatorRules = [
            'videos_id' => 'required|exists:videos,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        if (!$valiation) {
            return $this->error('This videos Not Found');
        }
        if ($customer) {
            $query->delete();
            return $this->successMessage('Your  videos Deleted successfully');

        }
    }

    public function delete_favourite_free_videos(Request $request)
    {
        $customer = auth('api')->user();
        $valiation = DB::table('favourite_free_videos')
            ->where('customer_id', $customer->id)
            ->where('free_videos_id', $request->free_videos_id)
            ->first();
        $query = DB::table('favourite_free_videos')
            ->where('customer_id', $customer->id)
            ->where('free_videos_id', $request->free_videos_id);
        $oValidatorRules = [
            'free_videos_id' => 'required|exists:free_videos,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        if (!$valiation) {
            return $this->error('This Video Not Found');
        }
        if ($customer) {
            $query->delete();
            return $this->successMessage('Your Video Deleted Successfully');

        }
    }

    public function favourite_free_videos(Request $request)
    {
        $customer = auth('api')->user();
        $valiation = DB::table('favourite_free_videos')
            ->where('customer_id', $customer->id)
            ->where('free_videos_id', $request->free_videos_id)
            ->first();
        $oValidatorRules = [
            'free_videos_id' => 'required|exists:free_videos,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        if ($valiation) {
            return $this->error('This Free Video Already Added As Favourite');
        }
        if ($customer) {
            DB::table('favourite_free_videos')->insert([
                'customer_id' => $customer->id,
                'free_videos_id' => $request->free_videos_id,
            ]);
            return $this->successMessage('Your Favourite Free Video Added Successfully');

        }
    }

    public function favourite_online_courses(Request $request)
    {
        $customer = auth('api')->user();
        $valiation = DB::table('favourite_online_courses')
            ->where('customer_id', $customer->id)
            ->where('online_course_id', $request->online_course_id)
            ->first();
        $oValidatorRules = [
            'online_course_id' => 'required|exists:online_courses,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        if ($valiation) {
            return $this->error('This Course Already Added As Favourite');
        }
        if ($customer) {
            DB::table('favourite_online_courses')->insert([
                'customer_id' => $customer->id,
                'online_course_id' => $request->online_course_id,
            ]);
            return $this->successMessage('Your Course Video Added Successfully');

        }
    }

    public function delete_favourite_online_courses(Request $request)
    {
        $customer = auth('api')->user();
        $valiation = DB::table('favourite_online_courses')
            ->where('customer_id', $customer->id)
            ->where('online_course_id', $request->online_course_id)
            ->first();
        $query = DB::table('favourite_online_courses')
            ->where('customer_id', $customer->id)
            ->where('online_course_id', $request->online_course_id);
        $oValidatorRules = [
            'online_course_id' => 'required|exists:online_courses,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        if (!$valiation) {
            return $this->error('This Course Not Found');
        }
        if ($customer) {
            $query->delete();
            return $this->successMessage('Your Course Deleted Successfully');

        }
    }

    public function show_favourite_ebooks()
    {
        $customer = auth('api')->user();
        return $this->success(new FavouriteEbooksResource($customer));

    }
    public function show_favourite_courses()
    {
        $customer = auth('api')->user();
        return $this->success(new FavouriteCoursesResource($customer));

    }

    public function show_favourite_free_videos()
    {
        $customer = auth('api')->user();
        return $this->success(new FavouriteFreeVideosResource($customer));

    }

    public function get_free_videos($slug)
    {
        $free_videos = FreeVideo::where('slug', $slug)->first();
        if ($free_videos)
        {
             $data=[
                'free_videos'=>new FreeVideosResource($free_videos),
             ];
            return $this->success($data);
        }
        else
        {
            return $this->error('NOT FOUND', [], 404);
        }

    }
    public function get_free_videos_related($slug)
    {
        $free_videos = FreeVideo::where('slug', $slug)->first();
        if ($free_videos)
        {
            $related=FreeVideo::where('slug', '!=',$slug)->where('category_id',$free_videos->category_id)->get();
            $data=[
                 'related'=> FreeVideosResource::collection($related)
            ];
            return $this->success($data);
        }
        else
        {
            return $this->error('NOT FOUND', [], 404);
        }

    }

    public function show_favourite_online_courses()
    {
        $customer = auth('api')->user();
        return $this->success(new FavouriteOnlineCoursesResource($customer));

    }

    public function get_online_courses($slug)
    {
        $course = OnlineCourse::where('slug', $slug)->first();
        if ($course) {
             $data=[
                'course'=>new OnlineCourseResource($course),
             ];
            return $this->success($data);

        } else {
            return $this->error('NOT FOUND', [], 404);
        }

    }
    public function get_online_courses_related($slug)
    {
        $course = OnlineCourse::where('slug', $slug)->first();
        if ($course) {
            $related=OnlineCourse::where('slug', '!=',$slug)->where('category_id',$course->category_id)->get();
            $data=[
                 'related'=> OnlineCourseResource::collection($related)
            ];
            return $this->success($data);

        } else {
            return $this->error('NOT FOUND', [], 404);
        }

    }

    public function get_ebooks($slug)
    {
         $ebook = Ebook::where('slug', $slug)->first();
        if ($ebook)
        {
             $data=[
                'ebook'=>new EbooksResource($ebook),
             ];
            return  $this->success($data);

        } else {
            return $this->error('NOT FOUND', [], 404);
        }

    }
    public function get_ebooks_related($slug)
    {
        $ebook = Ebook::where('slug', $slug)->first();
        if ($ebook)
        {
            $related=Ebook::where('slug', '!=',$slug)->where('category_id',$ebook->category_id)->get();
            $data=[
                'related'=> EbooksResource::collection($related)
            ];
            return  $this->success($data);

        } else {
            return $this->error('NOT FOUND', [], 404);
        }

    }


    public function show_favourite_videos()
    {
        $customer = auth('api')->user();
        return $this->success(new FavouriteVideosResource($customer));

    }

    public function get_videos($id)
    {
        $video = CourseIndexesVideos::find($id);
        if ($video) {
            $content = "WEBVTT";
            foreach ($video->IndexesVideos as $index) {
                $content .= "\n\n" . str_replace('.', ':', $index->time_from) . "--> " . str_replace('.', ':', $index->time_to) . "\n" . $index->translate(app()->getLocale())->title;
            }
            $content .= "\n";
            $path = 'video_index/' . time() . '_' . random_int(1, 100000) . '.webvtt';
            \Storage::disk('public')->put($path, $content);
            $data = [
                'video' => new VideosResource($video),
                'index_file' => asset('storage/' . $path),
            ];
            $user_id=auth('api')->user()->id;
            $check=UserVideos::where('video_id',$id)->where('user_id',$user_id)->first();
            if (!$check)
            {
                UserVideos::create([
                    'user_id'=>$user_id,
                    'video_id'=>$id
                ]);
            }

            return $this->success($data);

        } else {
            return $this->error('NOT FOUND', [], 404);
        }

    }

    public function get_pages($slug)
    {
        $page = Page::where('slug', $slug)->first();
        if ($page)
        {
            return $this->success(new PagesResource($page));

        } else {
            return $this->error('NOT FOUND', [], 404);
        }

    }

    public function get_instructor(Request $request)
    {
        $instructor = Instructor::where('slug', $request->slug)->first();
        if ($instructor) {
            return $this->success(new InstructorResource($instructor));

        } else {
            return $this->error('NOT FOUND', [], 404);
        }
    }

    public function get_course($slug)
    {
        $course = Course::where('slug', $slug)->first();
         $data=[
            'course'=>new CoursesResource($course),
               ];
        if ($course) {
            return $this->success($data);

        } else {
            return $this->error('NOT FOUND', [], 404);
        }
    }
    public function get_course_related($slug)
    {
        $course = Course::where('slug', $slug)->first();
        $related=Course::where('slug', '!=',$slug)->where('category_id',$course->category_id)->get();
         $data=[
             'related'=> CoursesResource::collection($related)
              ];
        if ($course) {
            return $this->success($data);

        } else {
            return $this->error('NOT FOUND', [], 404);
        }
    }

    public function buy_ebook(Request $request)
    {
        $customer_id=auth('api')->user()->id;
        $check=EbookOrders::where('customer_id',$customer_id)->where('ebook_id',$request->ebook_id)->first();
        $ebook=Ebook::find($request->ebook_id);
        if($ebook)
        {
            $price=$ebook->price;
        }

        $oValidatorRules =
        [
            'ebook_id' => 'required|exists:ebooks,id',
            'payment_method_id' => 'required|exists:payment_methods,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails())
        {
            return $this->error($validator->messages());
        }
         if (isset($check)&&$check->ebook_id==$ebook->id)
        {
            return $this->error(' You have Already Book this E-book');
        }
        else
        {
            $newEbookOrder=EbookOrders::create([
                'customer_id'=>$customer_id,
                'ebook_id'=>$request->ebook_id,
                'price'=>$price,
                'total'=>$price,
                'payment_method'=>$request->payment_method_id,
            ]);

            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', 'https://api.tap.company/v2/charges', [
                'body' => '{"amount":'.$newEbookOrder->total.',"currency":"KWD","customer_initiated":true,"threeDSecure":true,"save_card":false,
            "description":"Test Description","metadata":{"udf1":"Metadata 1"},
            "reference":{"transaction":"txn_01","order":"ord_01"},"receipt":{"email":true,"sms":true},
            "customer":{"first_name":"'.auth('api')->user()->name.'","email":"'.auth('api')->user()->email.'",
            "phone":{"country_code":965,"number":51234567}},"source":{"id":"src_all"},
            "post":{"url":"'.url('api/error_payment').'"},
            "redirect":{"url":"'.url('api/redirect').'"}}',
                'headers' => [
                    'Authorization' => 'Bearer sk_test_07j8TsngUhlEKdBRNVDGc14b',
                    'accept' => 'application/json',
                    'content-type' => 'application/json',
                ],
            ]);
            $newEbookOrder->update(['transaction_id'=>json_decode($response->getBody())->id,]);
//            dd(json_decode($response->getBody())->id);
            return  $this->successMessage('You have been booked this E-book',['url'=>(json_decode($response->getBody()))->transaction->url]);
        }
    }

    public function buy_course(Request $request)
    {
        $customer_id=auth('api')->user()->id;
//        dd($customer_id);
        $oValidatorRules =
            [
                'course_id' => 'required|exists:courses,id',
                'payment_method_id' => 'required|exists:payment_methods,id',
            ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails())
        {
            return $this->error($validator->messages());
        }
        $check=CourseOrders::where('customer_id',$customer_id)->first();
        $course=Course::find($request->course_id);
        if (!$course){
            return  $this->error('this course Not Found');
        }
        if ($check)
        {
            if ($check->customer_id==$customer_id&&$check->course_id==$course->id)
            {
                return $this->error(' You have Already Book this Course');
            }
        }

        else
        {
            $price=$course->price??'';
            $newCourseOrder=CourseOrders::create([
                'customer_id'=>$customer_id,
                'course_id'=>$request->course_id,
                'price'=>$price,
                'total'=>$price,
                'payment_method'=>$request->payment_method_id,
            ]);

            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', 'https://api.tap.company/v2/charges', [
                'body' => '{"amount":'.$newCourseOrder->total.',"currency":"KWD","customer_initiated":true,"threeDSecure":true,"save_card":false,
            "description":"Test Description","metadata":{"udf1":"Metadata 1"},
            "reference":{"transaction":"txn_01","order":"ord_01"},"receipt":{"email":true,"sms":true},
            "customer":{"first_name":"'.auth('api')->user()->name.'","email":"'.auth('api')->user()->email.'",
            "phone":{"country_code":965,"number":51234567}},"source":{"id":"src_all"},
            "post":{"url":"'.url('api/error_payment').'"},
            "redirect":{"url":"'.url('api/redirect-course').'"}}',
                'headers' => [
                    'Authorization' => 'Bearer sk_test_07j8TsngUhlEKdBRNVDGc14b',
                    'accept' => 'application/json',
                    'content-type' => 'application/json',
                ],
            ]);
            $newCourseOrder->update(['transaction_id'=>json_decode($response->getBody())->id,]);
            return  $this->successMessage('You have been booked this course',['url'=>(json_decode($response->getBody()))->transaction->url]);
        }
    }
    public function online_course_orders(Request $request)
    {
        $oValidatorRules =
            [
                'online_course_id' => 'required|exists:online_courses,id',
                'group_id' => 'required|exists:groups,id',
                'payment_method_id' => 'required|exists:payment_methods,id',
            ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails())
        {
            return $this->error($validator->messages());
        }
        $customer_id=auth('api')->user()->id;
        $check=OnlineCourseOrders::where('customer_id',$customer_id)->first();
        $course=OnlineCourse::find($request->online_course_id);
        if($course)
        {
            $price=$course->price;

        }
        $instructor_id=Groups::find($request->group_id)->instructor_id;

         if ($check&&$course->type=='single')
        {
            if ($check&&$check->online_course_id==$course->id)
            {
                return $this->error(' You have Already Book this Online Course');
            }
            }

        else
        {
            $newOnlineCourseOrder=OnlineCourseOrders::create([
                'customer_id'=>$customer_id,
                'group_id'=>$request->group_id,
                'instructor_id'=>$instructor_id,
                'online_course_id'=>$request->online_course_id,
                'price'=>$price,
                'total'=>$price,
                'payment_method'=>$request->payment_method_id,
            ]);
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', 'https://api.tap.company/v2/charges', [
                'body' => '{"amount":'.$newOnlineCourseOrder->total.',"currency":"KWD","customer_initiated":true,"threeDSecure":true,"save_card":false,
            "description":"Test Description","metadata":{"udf1":"Metadata 1"},
            "reference":{"transaction":"txn_01","order":"ord_01"},"receipt":{"email":true,"sms":true},
            "customer":{"first_name":"'.auth('api')->user()->name.'","email":"'.auth('api')->user()->email.'",
            "phone":{"country_code":965,"number":51234567}},"source":{"id":"src_all"},
            "post":{"url":"'.url('api/error_payment').'"},
            "redirect":{"url":"'.url('api/redirect-online-course').'"}}',
                'headers' => [
                    'Authorization' => 'Bearer sk_test_07j8TsngUhlEKdBRNVDGc14b',
                    'accept' => 'application/json',
                    'content-type' => 'application/json',
                ],
            ]);
            $newOnlineCourseOrder->update(['transaction_id'=>json_decode($response->getBody())->id,]);

            return  $this->successMessage('You have been booked this online course',['url'=>(json_decode($response->getBody()))->transaction->url]);
        }
    }
    public function customer_ebook_orders()
    {
        $customer=auth('api')->user();
        $ebooks=EbookOrders::where('customer_id',$customer->id)->get();
        if ($customer)
        {
            return $this->success(EbookOrderResource::collection($ebooks));
        }
        else
        {
            return $this->error('Not Found this Customer');
        }


    }
    public function customer_online_courses_orders()
    {
        $customer=auth('api')->user();
        $courses=OnlineCourseOrders::where('customer_id',$customer->id)->get();
        if ($customer)
        {
            return $this->success(OnlineCourseOrderResource::collection($courses));
        }
        else
        {
            return $this->error('Not Found this Customer');
        }


    }
    public function customer_course_orders()
    {
        $customer=auth('api')->user();
        $courses=CourseOrders::where('customer_id',$customer->id)->get();
        if ($customer)
        {
            return $this->success(CourseOrderResource::collection($courses));
        }
        else
        {
            return $this->error('Not Found this Customer');
        }
    }
    public function courses_videos($course_id)
    {
        $indexes=CourseIndexes::where('course_id',$course_id)->get();
        return $this->success(CoursesIndexesOnlyVideosResource::collection($indexes));
     }
     public function instructor_dates(Request $request)
     {
         $oValidatorRules = [
             'online_course_id' => 'required',
             'instructor_id' => 'required',
         ];
         $validator = Validator::make($request->all(), $oValidatorRules);
         if ($validator->fails()) {
             return $this->error($validator->messages());
         }

         $instructor=Instructor::find($request->instructor_id);
         if ($instructor) {
             $group = Groups::where('online_course_id', $request->online_course_id)
                 ->where('instructor_id', $request->instructor_id)->get();
             if ($group)
             {
                 $data = ['instructor' => new InstructorResource($instructor), 'group' => GroupResource::collection($group)];
             }
             else
             {
                 $data=['instructor'=>new InstructorResource($instructor),'group'=>null];

             }
         }
         else{
            return $this->error('Instructor Not Found');

         }
         return $this->success($data);
     }
     public function get_online_course_orders(Request $request)
     {
         $customer_id=auth('api')->user()->id;
        $onlineCourseOrder=OnlineCourseOrders::where('online_course_id',$request->online_course_id)
            ->where('customer_id',$customer_id)->first();
        if ($onlineCourseOrder)
        {
            $onlineCourse=OnlineCourse::find($request->online_course_id);
            $onlineCourseCollection=new OnlineCourseResource($onlineCourse);
            $group=Groups::find($onlineCourseOrder->group_id);
            $groups=new GroupResource($group);
            $quizes=Quiz::where('instructor_id',$onlineCourseOrder->instructor_id)->
                where('online_course_id',$onlineCourseOrder->online_course_id)->get();
            $quizes=QuizResource::collection($quizes);
            $attachments=Materials::where('online_course_id',$request->online_course_id)->
                where('instructor_id',$onlineCourseOrder->instructor_id)->get();
            $attachments=MaterialsResource::collection($attachments);
            $data=[
                'Online_course'=>$onlineCourseCollection,
                'Quizes'=>$quizes,
                'groups'=>$groups,
                'attachments'=>$attachments

            ];
            return  $this->success($data);
        }
        else
        {
            return $this->error('Buy This Online Course First,You are not a buyer it');
        }
     }
    public function get_quiz(Request $request)
    {
        $onlineCourse=OnlineCourse::where('slug',$request->online_course_slug)->first();
        if ($onlineCourse)
        {
            $customer_id=auth('api')->user()->id;
            $order=OnlineCourseOrders::where('online_course_id',$onlineCourse->id)
                ->where('customer_id',$customer_id)->first();
            if ($order)
            {
                 $quiz=Quiz::find($request->quiz_id);
                 if ($quiz)
                 {
                     return $this->success(new QuizResource($quiz));

                 }
                 else
                 {
                     return $this->error('Quiz Not Found');
                 }
            }
            else
            {
                return  $this->error('you should buy this course first');
            }

        }
        else
        {
            return $this->error('Online Course Not Found');
        }
    }

    public function pay()
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', 'https://api.tap.company/v2/charges', [
            'body' => '{"amount":1,"currency":"KWD","customer_initiated":true,"threeDSecure":true,"save_card":false,
            "description":"Test Description","metadata":{"udf1":"Metadata 1"},
            "reference":{"transaction":"txn_01","order":"ord_01"},"receipt":{"email":true,"sms":true},
            "customer":{"first_name":"test","middle_name":"test","last_name":"test","email":"test@test.com",
            "phone":{"country_code":965,"number":51234567}},"source":{"id":"src_all"},
            "post":{"url":"'.url('api/error_payment').'"},
            "redirect":{"url":"'.url('api/redirect').'"}}',
            'headers' => [
                'Authorization' => 'Bearer sk_test_07j8TsngUhlEKdBRNVDGc14b',
                'accept' => 'application/json',
                'content-type' => 'application/json',
            ],
        ]);

        echo $response->getBody();
        exit();
        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', 'https://api.tap.company/v2/charges', [

            'body' => '{"amount":1,"currency":"KWD","customer_initiated":true,"threeDSecure":true,"save_card":false,"description":"Test Description",
            "metadata":{"udf1":"Metadata 1"},"reference":{"transaction":"txn_01","order":"ord_01"},
            "receipt":{"email":true,"sms":true},"customer":{"first_name":"test","middle_name":
            "test","last_name":"test","email":"test@test.com","phone":{"country_code":965,"number":51234567}},
            "source":{"id":"src_card"},"post":{"url":'.url('api/error_payment').'},"redirect":{"url":"'.url('api/redirect').'"}}',
            'headers' => [
                'Authorization' => 'Bearer sk_test_07j8TsngUhlEKdBRNVDGc14b',
                'accept' => 'application/json',
                'content-type' => 'application/json',
            ],
        ]);

        echo (json_decode($response->getBody()))->transaction->url;
    }

    public function redirect_payment(Request $request)
    {


        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.tap.company/v2/charges/'.$request->tap_id, [
            'headers' => [
                'Authorization' => 'Bearer sk_test_07j8TsngUhlEKdBRNVDGc14b',
                'accept' => 'application/json',
            ],
        ]);
        $order=EbookOrders::where('transaction_id',$request->tap_id)->first();
        if($order){
            if((json_decode($response->getBody()))->status=='CAPTURED')
            {
                $order->update(['status'=>'success']);
                return Redirect::to('https://zahra.techsgate-stage.com/payment/success');

            }
            else
            {
                return Redirect::to('https://zahra.techsgate-stage.com/payment/fail');

            }
        }
    }

    public function redirect_payment_course(Request $request)
    {


        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.tap.company/v2/charges/'.$request->tap_id, [
            'headers' => [
                'Authorization' => 'Bearer sk_test_07j8TsngUhlEKdBRNVDGc14b',
                'accept' => 'application/json',
            ],
        ]);
        $order=CourseOrders::where('transaction_id',$request->tap_id)->first();
        if($order){
            if((json_decode($response->getBody()))->status=='CAPTURED')
            {
                $order->update(['status'=>'success']);
                return Redirect::to('https://zahra.techsgate-stage.com/payment/success');

            }
            else
            {
                return Redirect::to('https://zahra.techsgate-stage.com/payment/fail');

            }
        }
    }
    public function redirect_payment_online_course(Request $request)
    {


        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.tap.company/v2/charges/'.$request->tap_id, [
            'headers' => [
                'Authorization' => 'Bearer sk_test_07j8TsngUhlEKdBRNVDGc14b',
                'accept' => 'application/json',
            ],
        ]);
        $order=OnlineCourseOrders::where('transaction_id',$request->tap_id)->first();
        if($order){
            if((json_decode($response->getBody()))->status=='CAPTURED')
            {
                $instrucor=Instructor::find($order->instructor_id);
                if ($instrucor)
                {
                    $instructor_commision=($order->total*$instrucor->commission_instructor)/100;

                }
                $order->update(['status'=>'success','instructor_commision'=>$instructor_commision]);
                $instrucor->update(['balance'=>$instrucor->balance+$instructor_commision]);
                return Redirect::to('https://zahra.techsgate-stage.com/payment/success');

            }
            else
            {
                return Redirect::to('https://zahra.techsgate-stage.com/payment/fail');

            }
        }
    }

    public function error_payment(Request $request)
    {


        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://api.tap.company/v2/charges/'.$request->tap_id, [
            'headers' => [
                'Authorization' => 'Bearer sk_test_07j8TsngUhlEKdBRNVDGc14b',
                'accept' => 'application/json',
            ],
        ]);
        echo $response->getBody();
    }

}
