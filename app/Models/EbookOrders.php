<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableObserver;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableEngine;

class EbookOrders extends Model
{
    protected $table='ebook_orders';
    protected $fillable=
        [
        'payment_method',
        'discount',
        'price',
        'status',
        'total',
        'ebook_id',
        'customer_id',

    ];
    public function ebooks()
    {
        return $this->belongsTo(Ebook::class,'ebook_id');
    }




}
