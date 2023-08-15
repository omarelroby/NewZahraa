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
use App\Http\Resources\SettingResource;
use App\Http\Resources\VideosResource;
use App\Models\Category;
use App\Models\Contacts;
use App\Models\Country;
use App\Models\Course;
use App\Models\Ebook;
use App\Models\FreeVideo;
use App\Models\HomeSection;
use App\Models\Instructor;
use App\Models\InstructorRequests;
use App\Models\OnlineCourse;
use App\Models\Page;
use App\Models\Questions;
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

        $countries=Country::all();
        return $this->success(CountryResource::collection($countries));

    }
    public function categories()
    {
         $countries=Category::all();
        return $this->success(CategoryResource::collection($countries));

    }
    public function instructors()
    {
         $instructors=Instructor::all();
        return $this->success(InstructorResource::collection($instructors));

    }
    public function pages()
    {
        $pages=Page::all();
        return $this->success(PagesResource::collection($pages));

    }
    public function eBook(){
        $ebooks=Ebook::all();
        return $this->success(EbookResource::collection($ebooks));

    }
    public function courses(){
        $courses=Course::all();
        return $this->success(CoursesResource::collection($courses));
    }
    public function videos()
    {
        $videos=Videos::all();
        return $this->success(VideosResource::collection($videos));
    }
    public function free_videos(){
        $free_videos=FreeVideo::all();
        return $this->success(FreeVideosResource::collection($free_videos));
    }
    public function home_section(){
        $home=HomeSection::first();
        return $this->success(new HomeSectionResource($home));
    }
    public function setting(){
        $setting=Setting::first();
        return $this->success(new SettingResource($setting));
    }
    public function contact(Request $request){
        $oValidatorRules = [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'country_id' => 'required|exists:countries,id',

        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        else{
            $contact=Contacts::create($request->all());
            $c=$contact->toArray();
            return $this->successMessage(__('message.success'),$c);

        }
    }
    public function online_courses(){
        $courses=OnlineCourse::all();
        return $this->success(OnlineCourses::collection($courses));
    }
    public function questions(){
        $questions=Questions::all();
        return $this->success(\App\Http\Resources\Questions::collection($questions));
    }
    public function course_category()
    {
        $category=Category::where('type','Course')->get();
        return $this->success(CategoryResource::collection($category));
    }
    public function free_video_category()
    {
        $category=Category::where('type','Free-video')->get();
        return $this->success(CategoryResource::collection($category));
    }
    public function online_course_category()
    {
        $category=Category::where('type','Online-course')->get();
        return $this->success(CategoryResource::collection($category));
    }
    public function Ebooks()
    {
        $category=Category::where('type','Ebook')->get();
        return $this->success(CategoryResource::collection($category));
    }


}
