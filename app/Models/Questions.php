<?php

namespace App\Models;


 use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
 use Astrotomic\Translatable\Translatable;
 use Cviebrock\EloquentSluggable\Sluggable;
 use Cviebrock\EloquentSluggable\SluggableObserver;
 use Illuminate\Database\Eloquent\Model;

class Questions extends Model  implements TranslatableContract
{
    use  Translatable;

    protected $table='questions';
    public $translatedAttributes = ['question','answer'];



}
