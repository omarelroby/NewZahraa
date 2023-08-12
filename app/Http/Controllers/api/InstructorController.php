<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CountryResource;
use App\Http\Resources\CustomerResource;
use App\Http\Resources\EbookResource;
use App\Http\Resources\FavouriteEbooksResource;
use App\Http\Resources\FavouriteFreeVideosResource;
use App\Http\Resources\FavouriteOnlineCoursesResource;
use App\Http\Resources\FavouriteVideosResource;
use App\Http\Resources\FreeVideosResource;
use App\Http\Resources\InstructorResource;
use App\Http\Resources\OnlineCourses;
use App\Http\Resources\PagesResource;
use App\Http\Resources\VideosResource;
use App\Models\Appointments;
use App\Models\Category;
use App\Models\Country;
use App\Models\Course;
use App\Models\Customers;
use App\Models\Ebook;
use App\Models\FreeVideo;
use App\Models\Groups;
use App\Models\Instructor;
use App\Models\InstructorRequests;
use App\Models\OnlineCourse;
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


class InstructorController extends Controller
{
    use response;
    public function instructor_onlineCourses()
    {
        $user = auth('instructor-api')->user()->email;
         $instructor=Instructor::where('email',$user)->first();
        if ($instructor)
        {
            return $this->success(OnlineCourses::collection($instructor->OnlineCourses));
        }
        else
        {
            return $this->error('Instructor Not Found');
        }


    }
    public function groups(Request $request)
    {
        $instructor = auth('instructor-api')->user();
        $oValidatorRules = [
            'online_course_id' => 'required|exists:online_courses,id',
            'name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'zoom_link' => 'nullable',
        ];
        $validator = Validator::make($request->all(), $oValidatorRules);
        if ($validator->fails()) {
            return $this->error($validator->messages());
        }
        if ($instructor)
        {
            $group=Groups::create([
                'instructor_id'=>$instructor->id,
                'name'=>$request->name,
                'start_date'=>$request->start_date,
                'end_date'=>$request->end_date,
                 'online_course_id'=>$request->online_course_id,
            ]);
            foreach ($request->days as $day)
            {
                Appointments::create([
                    'group_id'=>$group->id,
                    'appointment_date'=>$day,
                ]);
            }
            return $this->successMessage('Appointment Added Successfully');

        }
        else
        {
            return $this->error('Instructor Not Found');
        }


    }


}
