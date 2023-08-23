<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ContactResource;
use App\Http\Resources\ContactsResource;
use App\Http\Resources\CountryResource;
use App\Http\Resources\CoursesResource;
use App\Http\Resources\EbookResource;
use App\Http\Resources\FreeVideosResource;
use App\Http\Resources\HomeSectionResource;
use App\Http\Resources\InstructorResource;
use App\Http\Resources\OnlineCourses;
use App\Http\Resources\PagesResource;
use App\Http\Resources\SessionAppointmentsResource;
use App\Http\Resources\SettingResource;
use App\Http\Resources\VideosResource;
use App\Models\BookingAppointments;
use App\Models\Category;
use App\Models\Contacts;
use App\Models\Country;
use App\Models\Coupon;
use App\Models\Course;
use App\Models\Ebook;
use App\Models\FreeVideo;
use App\Models\HomeSection;
use App\Models\Instructor;
use App\Models\InstructorRequests;
use App\Models\OnlineCourse;
use App\Models\Page;
use App\Models\Questions;
use App\Models\SessionAppointments;
use App\Models\Setting;
use App\Models\Videos;
use App\Traits\response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


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

    public function countries()
    {

        $countries = Country::all();
        return $this->success(CountryResource::collection($countries));

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

        $ebooks = $ebooks->get();

        return $this->success(EbookResource::collection($ebooks));


    }

    public function courses(Request $request)
    {
        if ($request->category_ids != null) {
            $courses = Course::whereIn('id', $request->category_ids)->get();
            return $this->success(CoursesResource::collection($courses));
        } else {
            $courses = Course::all();
            return $this->success(CoursesResource::collection($courses));

        }
    }

    public function videos()
    {
        $videos = Videos::all();
        return $this->success(VideosResource::collection($videos));
    }

    public function free_videos(Request $request)
    {
        if ($request->category_ids != null) {
            $free_videos = FreeVideo::whereIn('id', $request->category_ids)->get();
            return $this->success(FreeVideosResource::collection($free_videos));
        } else {
            $free_videos = FreeVideo::all();
            return $this->success(FreeVideosResource::collection($free_videos));

        }
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
        if ($request->category_ids != null) {
            $courses = OnlineCourse::whereIn('id', $request->category_ids)->get();
            return $this->success(OnlineCourses::collection($courses));
        } else {
            $courses = OnlineCourse::all();
            return $this->success(OnlineCourses::collection($courses));

        }
    }

    public function questions()
    {
        $questions = Questions::all();
        return $this->success(\App\Http\Resources\Questions::collection($questions));
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
            $coupon->update(['coupon_id' => $coupon->number_of_use++]);
            return $this->success('Your Data Added Successfully');
        } else {
            BookingAppointments::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'session_price' => $sessionPrice,
                'total_price' => $sessionPrice,
                'zoom_link' => $request->zoom_link,
                'country_id' => $request->country_id,
                'appointment_id' => $request->appointment_id,

            ]);
            return $this->success('Your Data Added Successfully');

        }

    }


}
