<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class VideosIndexes extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['title'];
    protected $fillable=['id','video_id','time_from','time_to'];

public function videos()
{
    return $this->belongsTo(Videos::class,'video_id');
}

}
