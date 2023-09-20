<?php

namespace App\Models;


use App\Http\Resources\OnlineCourseResource;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
     protected $table='groups';
     protected $fillable=[
        'name',
        'zoom_link',
        'start_url',
        'meeting_id',
        'start_date',
        'end_date',
        'online_course_id',
        'instructor_id',
    ];
    public function instructors(){
        return $this->belongsTo(Instructor::class,'instructor_id');
    }
    public function online_courses()
    {
        return $this->belongsTo(OnlineCourse::class,'online_course_id');
    }
    public function orders()
    {
        return $this->hasMany(OnlineCourseOrders::class,'group_id');
    }
    public function appointments()
    {
        return $this->hasMany(Appointments::class,'group_id');
    }

    public function quiz()
    {
        return $this->belongsToMany(Quiz::class,'quiz_groups','group_id','quiz_id');
    }
    public function students()
    {
        return $this->belongsToMany(Customers::class,'online_course_orders','group_id','customer_id');
    }
}
