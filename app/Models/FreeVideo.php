<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class FreeVideo extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['title','description'];
    protected $fillable=[
        'youtube_url',
    ];
}
