<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class OnlineCourseIndexesItemsTranslation extends Model
{
     protected $table='online_course_index_items_translations';
     protected $fillable=['online_course_indexes_items_id','title'];

public function indexes()
{
    return $this->belongsTo(OnlineCourseIndexes::class,'online_course_indexes_id');
}


}
