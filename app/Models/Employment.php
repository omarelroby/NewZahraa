<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['title','description','qualifications'];
    protected $table='employments';
    protected $fillable=[
         'experience',
        'image',
        'salary',
        'Gender',
        'job_type',
        'expiration_date',
        'posted_date',
        'slug',
     ];


}
