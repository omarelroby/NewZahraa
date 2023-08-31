<?php

namespace App\Models;


use App\Http\Resources\OnlineCourseResource;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class StudenQuizAnswer extends Model
{
     protected $table='student_quiz_answer';
     protected $fillable=[
        'id',
        'answer',
        'degree',
        'student_quiz_id',
        'question_id',

    ];



}
