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
        'category_id',
        'image',
        'introduction_image',
     ];

    public function indexes()
    {
        return $this->hasMany(CourseIndexes::class);
    }
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
