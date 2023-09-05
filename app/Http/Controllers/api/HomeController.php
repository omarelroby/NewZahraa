<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AppointmentsResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ContactResource;
use App\Http\Resources\ContactsResource;
use App\Http\Resources\CountryResource;
use App\Http\Resources\CoursesResource;
use App\Http\Resources\CoursesResourceCollection;
use App\Http\Resources\EbooksResource;
use App\Http\Resources\EbooksResourceCollection;
use App\Http\Resources\EmploymentResource;
use App\Http\Resources\FreeVideosResource;
use App\Http\Resources\FreeVideosResourceCollection;
use App\Http\Resources\HomeSectionResource;
use App\Http\Resources\InstructorResource;
use App\Http\Resources\OnlineCourseResourceCollection;
use App\Http\Resources\OnlineCourseResource;
use App\Http\Resources\PagesResource;
use App\Http\Resources\PaymentMethodsResource;
use App\Http\Resources\QuestionsResource;
use App\Http\Resources\SessionAppointmentsResource;
use App\Http\Resources\SettingResource;
use App\Http\Resources\VideosResource;
use App\Mail\ZoomLink;
use App\Models\BookingAppointments;
use App\Models\Category;
use App\Models\Contacts;
use App\Models\Country;
use App\Models\Coupon;
use App\Models\Course;
use App\Models\Ebook;
use App\Models\Employment;
use App\Models\FreeVideo;
use App\Models\HomeSection;
use App\Models\Instructor;
use App\Models\InstructorRequests;
use App\Models\OnlineCourse;
use App\Models\Page;
use App\Models\PaymentMethod;
use App\Models\Questions;
use App\Models\SessionAppointments;
use App\Models\Setting;
use App\Models\Videos;
use App\Traits\response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Jubaer\Zoom\Zoom;


class HomeController extends Controller
{
    use response;

    public function lecturer(Request $request)
    {
        $oValidatorRules = [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'cv' => 'required',
            'country_id' => 'required',
            'category_id' => 'required',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        $data = $request->all();

        if ($request->has('cv')) {
            $path = 'public/instructorRequests';
            $file = $request->file('cv')->getClientOriginalName();
            $data['cv'] = $request->file('cv')->move($path, $file);
        }
        InstructorRequests::create($data);
        return $this->successMessage(__('message.success'));

    }
    public function payment_methods()
    {
        $payment=PaymentMethod::all();
        return $this->success(PaymentMethodsResource::collection($payment));
    }

    public function countries()
    {

        $countries = Country::all();
        return $this->success(CountryResource::collection($countries));

    }
    public function employments()
    {

        $employments= Employment::where('status',1)->get();
        return $this->success(EmploymentResource::collection($employments));

    }
    public function get_employment_application($slug)
    {
        $employment = Employment::where('slug', $slug)->where('status',1)->first();
        if ($employment)
        {

            $data=[
                'employment_application'=>new EmploymentResource($employment),
            ];
            return $this->success($data);
        }
        else
        {
            return $this->error('NOT FOUND', [], 404);
        }

    }

    public function categories()
    {
        $countries = Category::all();
        return $this->success(CategoryResource::collection($countries));

    }

    public function instructors()
    {
        $instructors = Instructor::all();
        return $this->success(InstructorResource::collection($instructors));

    }

    public function pages()
    {
        $pages = Page::all();
        return $this->success(PagesResource::collection($pages));

    }

    public function eBook(Request $request)
    {
        $oValidatorRules = [
            'category_ids' => 'nullable|array',
            'category_ids.*' => 'required|exists:categories,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails())
            return $this->error($validator->messages(),[],422);
        $ebooks = Ebook::query();
        if (is_array($request->category_ids) && count($request->category_ids) > 0)
            $ebooks = $ebooks->whereIn('category_id', $request->category_ids);
        if ($request->search && $request->search != '')
            $ebooks = $ebooks->whereTranslationLike('title', '%'.$request->search.'%');
         $ebooks= $ebooks->paginate($request->limit??5);
        return $this->success(new EbooksResourceCollection($ebooks));
    }

    public function courses(Request $request)
    {
        $oValidatorRules = [
            'category_ids' => 'nullable|array',
            'category_ids.*' => 'required|exists:categories,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails())
            return $this->error($validator->messages(),[],422);
        $courses = Course::query();
        if (is_array($request->category_ids) && count($request->category_ids) > 0)
            $courses = $courses->whereIn('category_id', $request->category_ids);
        if ($request->search && $request->search != '')
            $courses = $courses->whereTranslationLike('title', '%'.$request->search.'%');
        $courses = $courses->paginate($request->limit??5);
        return $this->success(new CoursesResourceCollection($courses));
    }

    public function videos()
    {
        $videos = Videos::all();
        return $this->success(VideosResource::collection($videos));
    }

    public function free_videos(Request $request)
    {
        $oValidatorRules = [
            'category_ids' => 'nullable|array',
            'category_ids.*' => 'required|exists:categories,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails())
            return $this->error($validator->messages(),[],422);
        $freeVideos = FreeVideo::query();
        if (is_array($request->category_ids) && count($request->category_ids) > 0)
            $freeVideos = $freeVideos->whereIn('category_id', $request->category_ids);
        if ($request->search && $request->search != '')
            $freeVideos = $freeVideos->whereTranslationLike('title', '%'.$request->search.'%');
         $freeVideos = $freeVideos->paginate($request->limit??5);
        return $this->success(new FreeVideosResourceCollection($freeVideos));
    }

    public function home_section()
    {
        $home = HomeSection::first();
        return $this->success(new HomeSectionResource($home));
    }

    public function setting()
    {
        $setting = Setting::first();
        return $this->success(new SettingResource($setting));
    }

    public function contact(Request $request)
    {
        $oValidatorRules = [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country_id' => 'required|exists:countries,id',

        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        } else {
            $contact = Contacts::create($request->all());
            $c = $contact->toArray();
            return $this->successMessage(__('message.success'), $c);

        }
    }

    public function online_courses(Request $request)
    {
        $oValidatorRules =
            [
            'category_ids' => 'nullable|array',
            'category_ids.*' => 'required|exists:categories,id',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails())
            return $this->error($validator->messages(),[],422);
        $onlineCourse = OnlineCourse::query();
        if (is_array($request->category_ids) && count($request->category_ids) > 0)
            $onlineCourse = $onlineCourse->whereIn('category_id', $request->category_ids);
        if ($request->search && $request->search != '')
            $onlineCourse = $onlineCourse->whereTranslationLike('title', '%'.$request->search.'%');
         $onlineCourse= $onlineCourse->paginate($request->limit??5);
        return $this->success(new OnlineCourseResourceCollection($onlineCourse));
    }

    public function questions(Request $request)
    {
         if ($request->search && $request->search != '')
        {
            $questions = Questions::whereTranslationLike('question','like','%'.$request->search.'%')->get();

        }
        else
        {
            $questions = Questions::all();
            dd($questions);
        }
        return $this->success(QuestionsResource::collection($questions));
    }

    public function course_category()
    {
        $category = Category::where('type', 'Course')->get();
        return $this->success(CategoryResource::collection($category));
    }

    public function free_video_category()
    {
        $category = Category::where('type', 'Free-video')->get();
        return $this->success(CategoryResource::collection($category));
    }

    public function online_course_category()
    {
        $category = Category::where('type', 'Online-course')->get();
        return $this->success(CategoryResource::collection($category));
    }

    public function Ebooks()
    {
        $category = Category::where('type', 'Ebook')->get();
        return $this->success(CategoryResource::collection($category));
    }

    public function appointments($id)
    {
//        dd('m');
        $session = SessionAppointments::where('month', $id)->get();
        if (count($session) > 0) {
            return $this->success(SessionAppointmentsResource::collection($session));
        } else {
            return $this->error('This months deosn\'t has any Dates');
        }
    }

    public function booking_appointments(Request $request)
    {
        $sessionPrice = Setting::first()->session_price;
        $oValidatorRules = [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'payment_method' => 'nullable',
            'session_price' => 'nullable',
            'total_price' => 'nullable',
            'zoom_link' => 'nullable',
            'appointment_id' => 'required|exists:session_appointments,id',
            'country_id' => 'required',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        };
        if ($request->coupon_id != null) {
            $coupon = Coupon::find($request->coupon_id);
            $discount = $coupon->discount;
            $booking = BookingAppointments::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'session_price' => $sessionPrice,
                'total_price' => $sessionPrice - ($sessionPrice * $discount / 100),
                'zoom_link' => $request->zoom_link,
                'country_id' => $request->country_id,
                'appointment_id' => $request->appointment_id,
                'coupon_id' => $request->coupon_id,
                'discount' => 1
            ]);
             $meetings = (new \Jubaer\Zoom\Zoom)->createMeeting([
                "agenda" => 'DR.Zahraa Meeting',
                "topic" => 'DR.Zahraa With'.' '.$booking['name'],
                "type" => 2, // 1 => instant, 2 => scheduled, 3 => recurring with no fixed time, 8 => recurring with fixed time
                "duration" => 60, // in minutes
                "timezone" => 'Asia/Kuwait', // set your timezone
                 "start_time" => date("c", strtotime($booking->appointments->date)), // set your start time
                "template_id" => 'set your template id', // set your template id  Ex: "Dv4YdINdTk+Z5RToadh5ug==" from https://marketplace.zoom.us/docs/api-reference/zoom-api/meetings/meetingtemplates
                "pre_schedule" => false,  // set true if you want to create a pre-scheduled meeting
                 "settings" => [
                    'join_before_host' => false, // if you want to join before host set true otherwise set false
                    'host_video' => false, // if you want to start video when host join set true otherwise set false
                    'participant_video' => false, // if you want to start video when participants join set true otherwise set false
                    'mute_upon_entry' => false, // if you want to mute participants when they join the meeting set true otherwise set false
                    'waiting_room' => false, // if you want to use waiting room for participants set true otherwise set false
                    'audio' => 'both', // values are 'both', 'telephony', 'voip'. default is both.
                    'auto_recording' => 'none', // values are 'none', 'local', 'cloud'. default is none.
                    'approval_type' => 0, // 0 => Automatically Approve, 1 => Manually Approve, 2 => No Registration Required
                ],
            ]);
             $booking->update([
                'zoom_link'=>$meetings['data']['join_url'],
                'start_url'=>$meetings['data']['start_url'],
                'meeting_id'=>$meetings['data']['id'],
            ]);
             $join=$meetings['data']['join_url'];
             $name=$request->name;
            Mail::to($booking->email)->send(new ZoomLink($join,$name));

            $coupon->update(['coupon_id' => $coupon->number_of_use++]);
            return $this->success('Your Data Added Successfully');
        }
        else
        {

            $booking=BookingAppointments::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'session_price' => $sessionPrice,
                'total_price' => $sessionPrice,
                'zoom_link' => $request->zoom_link,
                'country_id' => $request->country_id,
                'appointment_id' => $request->appointment_id,

            ]);
            $meetings = (new \Jubaer\Zoom\Zoom)->createMeeting([
                "agenda" => 'DR.Zahraa Meeting',
                "topic" => 'DR.Zahraa With'.' '.$booking['name'],
                "type" => 2, // 1 => instant, 2 => scheduled, 3 => recurring with no fixed time, 8 => recurring with fixed time
                "duration" => 60, // in minutes
                "timezone" => 'Asia/Kuwait', // set your timezone
                "start_time" => $booking->appointments->date, // set your start time
                "template_id" => 'set your template id', // set your template id  Ex: "Dv4YdINdTk+Z5RToadh5ug==" from https://marketplace.zoom.us/docs/api-reference/zoom-api/meetings/meetingtemplates
                "pre_schedule" => false,  // set true if you want to create a pre-scheduled meeting
                "settings" => [
                    'join_before_host' => false, // if you want to join before host set true otherwise set false
                    'host_video' => false, // if you want to start video when host join set true otherwise set false
                    'participant_video' => false, // if you want to start video when participants join set true otherwise set false
                    'mute_upon_entry' => false, // if you want to mute participants when they join the meeting set true otherwise set false
                    'waiting_room' => false, // if you want to use waiting room for participants set true otherwise set false
                    'audio' => 'both', // values are 'both', 'telephony', 'voip'. default is both.
                    'auto_recording' => 'none', // values are 'none', 'local', 'cloud'. default is none.
                    'approval_type' => 0, // 0 => Automatically Approve, 1 => Manually Approve, 2 => No Registration Required
                ],

            ]);
            $booking->update([
                'zoom_link'=>$meetings['data']['join_url'],
                'start_url'=>$meetings['data']['start_url'],
                'meeting_id'=>$meetings['data']['id'],
            ]);
            $join=$meetings['data']['join_url'];
            $name=$request->name;
            Mail::to($booking->email)->send(new ZoomLink($join,$name));

            return $this->success('Your Data Added Successfully');

        }

    }
    public function subscription(Request $request)
    {
        DB::table('subscriptions')->insert(['email'=>$request->email]);
        return $this->success('Email Added Successfully');
    }
    public function get_session_dates(Request $request)
    {
         $dates=SessionAppointments::whereDate('date', $request->date)->get();

         return $this->success(SessionAppointmentsResource::collection($dates));
     }

}
