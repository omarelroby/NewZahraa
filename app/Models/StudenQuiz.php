<?php

namespace App\Models;


use App\Http\Resources\OnlineCourseResource;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class StudenQuiz extends Model
{
     protected $table='student_quiz';
     protected $fillable=[
        'id',
        'total_degree',
        'users_id',
        'online_course_id',
        'quiz_id',

    ];

    public function online_courses()
    {
        return $this->belongsTo(OnlineCourseResource::class,'online_course_id');
    }

}
