<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class OnlineCourseIndexesItems extends Model implements TranslatableContract
{
    use Translatable;
    protected $table='online_course_index_items';
    public $translatedAttributes = ['title'];
    protected $fillable=['online_course_indexes_id'];

public function indexes()
{
    return $this->belongsTo(OnlineCourseIndexes::class,'online_course_indexes_id');
}


}
