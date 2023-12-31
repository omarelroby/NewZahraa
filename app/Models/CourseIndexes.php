<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class CourseIndexes extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['name'];
    protected $fillable=['course_id'];

public function courses()
{
    return $this->belongsTo(Course::class,'course_id');
}
public function videos()
{
    return $this->hasMany(CourseIndexesVideos::class,'course_indexes_id');
}
}
