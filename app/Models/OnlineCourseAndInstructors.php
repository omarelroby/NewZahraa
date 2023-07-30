<?php

namespace App\Models;


 use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class OnlineCourseAndInstructors extends Model
{

    protected $table='online_courses_and_instructors';
    protected $fillable=[
        'instructor_id',
        'online_course_id',
    ];



}
