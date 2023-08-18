<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableObserver;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableEngine;

class OnlineCourseOrders extends Model
{
    protected $table='online_course_orders';
    protected $fillable=
        [
        'payment_method',
        'discount',
        'price',
        'status',
        'total',
        'instructor_id',
        'online_course_id',
        'customer_id',
        'group_id',

    ];
    public function course()
    {
        return $this->belongsTo(Course::class,'course_id');
    }




}
