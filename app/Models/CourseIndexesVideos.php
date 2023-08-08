<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class CourseIndexesVideos extends Model implements TranslatableContract
{
    use Translatable;
    protected $table='course_index_videos';
    public $translatedAttributes = ['title'];
    protected $fillable=['course_indexes_id','is_free','video'];

public function indexes()
{
    return $this->belongsTo(CourseIndexes::class,'course_indexes_id');
}


}
