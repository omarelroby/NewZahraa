<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Instructor extends Authenticatable
{
    use HasFactory;
    use HasApiTokens;


    protected $fillable=[
        'id',
        'name',
        'email',
        'slug',
        'password',
        'phone',
        'brief',
        'image',
        'code',
        'category_id',
        'country_id',
        'commission_instructor',
        'balance',
    ];
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }
    public function OnlineCourses(){
        return $this->belongsToMany(OnlineCourse::class,'online_courses_and_instructors','instructor_id','online_course_id');
    }
    public function attachments(){
        return $this->hasMany(InstructorAttachs::class);
    }
}
