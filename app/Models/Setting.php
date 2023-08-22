<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model implements TranslatableContract
{
    use Translatable , HasFactory;


    public $translatedAttributes = ['title','description'];
    protected $fillable=[
        'Keywords',
        'phone',
        'whatsapp',
        'email',
        'address',
        'google_map',
        'facebook_url',
        'twitter_url',
        'youtube_url',
        'tiktok_url',
        'session_price',

    ];


}
