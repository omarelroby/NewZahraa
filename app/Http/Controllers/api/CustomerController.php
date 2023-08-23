<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CountryResource;
use App\Http\Resources\CourseOrderResource;
use App\Http\Resources\CoursesResource;
use App\Http\Resources\CustomerResource;
use App\Http\Resources\EbookOrderResource;
use App\Http\Resources\EbookResource;
use App\Http\Resources\FavouriteEbooksResource;
use App\Http\Resources\FavouriteFreeVideosResource;
use App\Http\Resources\FavouriteOnlineCoursesResource;
use App\Http\Resources\FavouriteVideosResource;
use App\Http\Resources\FreeVideosResource;
use App\Http\Resources\InstructorResource;
use App\Http\Resources\OnlineCourseOrderResource;
use App\Http\Resources\OnlineCourses;
use App\Http\Resources\PagesResource;
use App\Http\Resources\VideosResource;
use App\Models\Category;
use App\Models\Country;
use App\Models\Course;
use App\Models\CourseOrders;
use App\Models\Customers;
use App\Models\Ebook;
use App\Models\EbookOrders;
use App\Models\FreeVideo;
use App\Models\Groups;
use App\Models\Instructor;
use App\Models\InstructorRequests;
use App\Models\OnlineCourse;
use App\Models\OnlineCourseOrders;
use App\Models\Page;
use App\Models\Videos;
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

            } else {
                return $this->error('check your email, email not corrected');
            }

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

    public function update_profile(Request $request)
    {
        $customer = auth('api')->user();
        $oValidatorRules = [
            'name' => 'required',
            'email' => 'required|unique:customers,email',
            'password' => 'nullable|min:8',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        if ($customer) {
            $customer->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
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
            $related=FreeVideo::where('slug', '!=',$slug)->where('category_id',$free_videos->category_id)->get();
            $data=[
                'free-videos'=>new FreeVideosResource($free_videos),
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
            $related=OnlineCourse::where('slug', '!=',$slug)->where('category_id',$course->category_id)->get();
            $data=[
                'course'=>new OnlineCourses($course),
                'related'=> OnlineCourses::collection($related)
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
            $related=Ebook::where('slug', '!=',$slug)->where('category_id',$ebook->category_id)->get();
            $data=[
                'ebook'=>new EbookResource($ebook),
                'related'=> EbookResource::collection($related)
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

    public function get_videos($slug)
    {
        $video = Videos::with('indexes')->where('slug', $slug)->first();
        if ($video) {
            $content = "WEBVTT";
            foreach ($video->indexes as $index) {
                $content .= "\n\n" . str_replace('.', ':', $index->time_from) . "--> " . str_replace('.', ':', $index->time_to) . "\n" . $index->translate(app()->getLocale())->title;
            }
            $content .= "\n";
            $path = 'video_index/' . time() . '_' . random_int(1, 100000) . '.webvtt';
            \Storage::disk('public')->put($path, $content);
            $data = [
                'video' => new VideosResource($video),
                'index_file' => asset('storage/' . $path),
            ];
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
        $related=Course::where('slug', '!=',$slug)->where('category_id',$course->category_id)->get();
        $data=[
            'course'=>new CoursesResource($course),
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
        $check=EbookOrders::where('customer_id',$customer_id)->first();
        $ebook=Ebook::find($request->ebook_id);
        $price=$ebook->price;
        $oValidatorRules =
        [
            'ebook_id' => 'required|exists:ebooks,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails())
        {
            return $this->error($validator->messages());
        }
        if ($check->customer_id==$customer_id&&$check->ebook_id==$ebook->id)
        {
            return $this->error(' You have Already Book this E-book');
        }
        else
        {
            EbookOrders::create([
                'customer_id'=>$customer_id,
                'ebook_id'=>$request->ebook_id,
                'price'=>$price,
                'total'=>$price,
            ]);
            return  $this->successMessage('You have been booked this E-book');
        }
    }

    public function buy_course(Request $request)
    {
        $customer_id=auth('api')->user()->id;
        $check=CourseOrders::where('customer_id',$customer_id)->first();
        $course=Course::find($request->course_id);
        $price=$course->price;
        $oValidatorRules =
            [
                'course_id' => 'required|exists:courses,id',
            ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails())
        {
            return $this->error($validator->messages());
        }
        if ($check->customer_id==$customer_id&&$check->course_id==$course->id)
        {
            return $this->error(' You have Already Book this Course');
        }
        else
        {
            CourseOrders::create([
                'customer_id'=>$customer_id,
                'course_id'=>$request->course_id,
                'price'=>$price,
                'total'=>$price,
            ]);
            return  $this->successMessage('You have been booked this course');
        }
    }
    public function online_course_orders(Request $request)
    {
        $customer_id=auth('api')->user()->id;
        $check=OnlineCourseOrders::where('customer_id',$customer_id)->first();
        $course=OnlineCourse::find($request->online_course_id);
        $price=$course->price;
        $instructor_id=Groups::find($request->group_id)->instructor_id;
        $oValidatorRules =
            [
                'online_course_id' => 'required|exists:online_courses,id',
                'group_id' => 'required|exists:groups,id',
            ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails())
        {
            return $this->error($validator->messages());
        }
         if ($check&&$course->type=='single')
        {
            return $this->error(' You have Already Book this Online Course');
        }

        else
        {
            OnlineCourseOrders::create([
                'customer_id'=>$customer_id,
                'group_id'=>$request->group_id,
                'instructor_id'=>$instructor_id,
                'online_course_id'=>$request->online_course_id,
                'price'=>$price,
                'total'=>$price,
            ]);
            return  $this->successMessage('You have been booked this online course');
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




}
