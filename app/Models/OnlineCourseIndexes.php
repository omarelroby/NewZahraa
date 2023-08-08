<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class OnlineCourseIndexes extends Model implements TranslatableContract
{
    use Translatable;
    protected $table='online_course_indexes';
    public $translatedAttributes = ['title'];
    protected $fillable=['online_course_id'];

public function courses()
{
    return $this->belongsTo(OnlineCourse::class,'online_course_id');
}

}
