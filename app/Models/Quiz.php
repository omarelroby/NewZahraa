<?php

namespace App\Models;


use App\Http\Resources\OnlineCoursesResource;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
     protected $table='quiz';
     protected $fillable=[
        'id',
        'quiz_name',
        'degree',
        'online_course_id',
        'instructor_id',
        'is_discount',
        'discount',
        'discount_score',
    ];
    public function instructors(){
        return $this->belongsTo(Instructor::class,'instructor_id');
    }
    public function online_courses()
    {
        return $this->belongsTo(OnlineCoursesResource::class,'online_course_id');
    }

}
