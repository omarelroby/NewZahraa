<?php

namespace App\Models;


use App\Http\Resources\OnlineCourseResource;
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
        return $this->belongsTo(OnlineCourseResource::class,'online_course_id');
    }
    public function quizes()
    {
        return $this->belongsTo(Quiz::class,'quiz_id');
    }
    public function questions_options()
    {
        return $this->hasMany(QuestionsOptions::class,'quiz_question_id');
    }
}
