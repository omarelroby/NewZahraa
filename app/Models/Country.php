<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Country extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['name'];
    protected $fillable=['image','slug','country_code'];

    public function students()
    {
        return $this->hasMany(Customers::class,'country_id')->whereHas('instructor');
    }

}
