<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CountryResource;
use App\Http\Resources\CoursesResource;
use App\Http\Resources\EbookResource;
use App\Http\Resources\FreeVideosResource;
use App\Models\Category;
use App\Models\Country;
use App\Models\Course;
use App\Models\Ebook;
use App\Models\FreeVideo;
use App\Models\InstructorRequests;
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
            $path = 'instructorRequests';
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
    public function eBook(){
        $ebooks=Ebook::all();
        return $this->success(EbookResource::collection($ebooks));

    }
    public function courses(){
        $courses=Course::all();
        return $this->success(CoursesResource::collection($courses));
    }
    public function free_videos(){
        $free_videos=FreeVideo::all();
        return $this->success(FreeVideosResource::collection($free_videos));
    }


}
