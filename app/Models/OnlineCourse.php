<?php

namespace App\Models;


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
}
