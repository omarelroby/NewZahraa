<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class CourseIndexesVideosTranslation extends Model
{
    protected $table='course_index_videos_translations';
    protected $fillable=['title'];


}
