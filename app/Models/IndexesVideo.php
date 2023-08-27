<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class IndexesVideo extends Model implements TranslatableContract
{
    use Translatable;
    protected $table='indexes_video';
    public $translatedAttributes = ['title'];
    protected $fillable=['id','indexes_video_id','time_from','time_to'];

public function indexes()
{
    return $this->belongsTo(CourseIndexesVideos::class,'indexes_video_id');
}

}
