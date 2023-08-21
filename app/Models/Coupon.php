<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
     protected  $table='coupon_code';
     protected $fillable=[
        'code',
        'number_of_use',
        'used',
        'discount',
        'type',
     ];

    public function indexes()
    {
        return $this->hasMany(CourseIndexes::class);
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
