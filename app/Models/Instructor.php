<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Instructor extends Model
{
    use HasFactory;
    use HasApiTokens;


    protected $fillable=[
        'name',
        'email',
        'password',
        'phone',
        'brief',
        'image',
        'category_id',
        'country_id',
    ];
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }
    public function OnlineCourses(){
        return $this->belongsToMany(OnlineCourse::class,'online_courses_and_instructors','online_course_id','instructor_id');
    }
}
