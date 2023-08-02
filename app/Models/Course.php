<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Course extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['title','description'];
    protected $fillable=[
        'slug',
        'price',
        'preview_video',
        'instructor_id',
    ];
    public function instructors(){
        return $this->belongsTo(Instructor::class,'instructor_id');
    }
}
