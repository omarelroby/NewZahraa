<?php

namespace App\Models;


use App\Http\Resources\OnlineCoursesResource;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class QuestionsOptions extends Model
{
     protected $table='question_options';
     protected $fillable=[
        'id',
        'answer',
        'answer_number',
        'quiz_question_id',
     ];


}
