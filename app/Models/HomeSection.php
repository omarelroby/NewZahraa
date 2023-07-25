<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class HomeSection extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['title','description','button'];
    protected $fillable=[
        'url',
        'image',
    ];

}
