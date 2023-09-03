<?php

namespace App\Models;


use App\Http\Resources\OnlineCourseResource;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class OnlineCourse extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['title','description'];
    protected $fillable=[
        'id',
        'price',
        'slug',
        'hours',
        'type',
        'image',
        'date',
        'lessons_number',
        'category_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function Instructors(){
        return $this->belongsToMany(Instructor::class,'online_courses_and_instructors','instructor_id', 'online_course_id');
    }
    public function favourite_online_courses(){
        return $this->belongsToMany(Customers::class,'favourite_online_courses','online_course_id','customer_id');
    }
    public function groups()
    {
        return $this->hasMany(Groups::class);
    }
    public function orders()
    {
        return $this->hasMany(OnlineCourseOrders::class);
    }
    public function indexes()
    {
        return $this->hasMany(OnlineCourseIndexes::class);
    }
    public function quizes()
    {
        return $this->hasMany(Quiz::class);

    }

}
