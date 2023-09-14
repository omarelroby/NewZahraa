<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Course;
use App\Models\Customers;
use App\Models\Ebook;
use App\Models\FreeVideo;
use App\Models\Instructor;
use App\Models\OnlineCourse;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController

{
    public function index(){
        $ebooks=Ebook::all()->count();
        $courses=Course::all()->count();
        $free_videos=FreeVideo::all()->count();
        $online_course=OnlineCourse::all()->count();
        $customers=Customers::all()->count();
        $instructors=Instructor::all()->count();
        return view('dashboard.home',compact('instructors','ebooks','courses','free_videos','online_course','customers'));
    }
    public function create(){
        return view('dashboard.create');
    }
    public function show(){
        return view('dashboard.index');
    }


}
