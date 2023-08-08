<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['title','description'];
    protected $fillable=[
        'id',
        'price',
        'slug',
        'preview_video',
        'complete_video',
        'instructor_id',
    ];
    public function instructors(){
        return $this->belongsTo(Instructor::class,'instructor_id');
    }
    public function favourite_videos(){
        return $this->belongsToMany(Customers::class,'favourite_videos','videos_id','customer_id');
    }
    public function indexes()
    {
        return $this->hasMany(VideosIndexes::class);
    }
}
