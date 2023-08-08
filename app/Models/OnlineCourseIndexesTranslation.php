<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class OnlineCourseIndexesTranslation extends Model
{
    protected $table='online_course_indexes_translations';
    protected $fillable=['title','online_course_indexes_id'];

public function courses()
{
    return $this->belongsTo(OnlineCourseIndexes::class,'online_course_indexes_id');
}

}
