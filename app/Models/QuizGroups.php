<?php

namespace App\Models;


use App\Http\Resources\OnlineCourses;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class QuizGroups extends Model
{
     protected $table='quiz_groups';
     protected $fillable=
         [
        'quiz_id',
        'group_id',
    ];


}
