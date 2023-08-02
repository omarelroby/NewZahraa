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
        'slug',
    ];
    public function favourite_free_videos(){
        return $this->belongsToMany(Customers::class,'favourite_free_videos', 'free_videos_id','customer_id');
    }
}
