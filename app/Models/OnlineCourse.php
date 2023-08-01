<?php

namespace App\Models;


use App\Http\Resources\OnlineCourses;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class OnlineCourse extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['title','description'];
    protected $fillable=[
        'price',
        'hours',
        'image',
        'date',
        'lessons_number',
    ];
    public function Instructors(){
        return $this->belongsToMany(Instructor::class,'online_courses_and_instructors','instructor_id', 'online_course_id');
    }
    public function favourite_online_courses(){
        return $this->belongsToMany(Customers::class,'favourite_online_courses','online_course_id','customer_id');
    }
}
