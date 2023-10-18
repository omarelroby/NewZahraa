<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableObserver;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableEngine;

class CourseOrders extends Model
{
    protected $table='courses_orders';
    protected $fillable=
        [
        'payment_method',
        'discount',
        'price',
        'status',
        'total',
        'course_id',
        'customer_id',
        'transaction_id',
        'read',

    ];
    public function course()
    {
        return $this->belongsTo(Course::class,'course_id');
    }
    public function payment()
    {
        return $this->belongsTo(PaymentMethod::class,'payment_method');
    }
    public function customer()
    {
        return $this->belongsTo(Customers::class,'customer_id');

    }




}
