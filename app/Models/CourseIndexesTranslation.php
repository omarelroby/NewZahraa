<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class CourseIndexesTranslation extends Model
{
    protected $table='course_indexes_translations';
    protected $fillable=['name'];


}
