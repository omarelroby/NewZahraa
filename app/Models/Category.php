<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['name'];

    protected $fillable= ['slug','type'];
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
    public function onlineCourses()
    {
        return $this->hasMany(OnlineCourse::class);

    }
    public function Ebooks()
    {
        return $this->hasMany(Ebook::class);

    }
    public function FreeVideos()
    {
        return $this->hasMany(FreeVideo::class);

    }




}
