<?php

namespace App\Models;


use App\Http\Resources\OnlineCourses;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Customers extends Authenticatable
{
    use HasFactory;
    use HasApiTokens;


    protected $fillable=[
        'name',
        'email',
        'image',
        'password',
        'phone',
        'country_id',
    ];

    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }
    public function favourite_ebook(){
        return $this->belongsToMany(Ebook::class,'favourite_ebooks','customer_id','ebooks_id');
    }
    public function favourite_free_videos(){
        return $this->belongsToMany(FreeVideo::class,'favourite_free_videos','customer_id','free_videos_id');
    }
    public function favourite_online_courses(){
        return $this->belongsToMany(OnlineCourse::class,'favourite_online_courses','customer_id','online_course_id');
    }
    public function favourite_videos(){
        return $this->belongsToMany(Videos::class,'favourite_videos','customer_id','videos_id');
    }
}
