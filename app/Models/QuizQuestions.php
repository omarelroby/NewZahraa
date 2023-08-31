<?php

namespace App\Models;


use App\Http\Resources\OnlineCoursesResource;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class QuizQuestions extends Model
{
     protected $table='quiz_questions';
     protected $fillable=[
        'id',
        'name',
        'type',
        'correct_answer',
        'degree',
        'quiz_id',

    ];
    public function instructors(){
        return $this->belongsTo(Instructor::class,'instructor_id');
    }
    public function online_courses()
    {
        return $this->belongsTo(OnlineCoursesResource::class,'online_course_id');
    }

}
