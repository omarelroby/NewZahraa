<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableObserver;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableEngine;

class Ebook extends Model implements TranslatableContract
{
    use Translatable;
     public $translatedAttributes = ['title','summary'];
    protected $fillable=[
        'image',
        'slug',
        'sample_file',
        'complete_file',
        'writer',
        'type',
        'amazon_url',
        'price'];
    public function favourite_ebook()
    {
        return $this->belongsToMany(Customers::class,'favourite_ebooks','ebooks_id','customer_id');
    }




}
