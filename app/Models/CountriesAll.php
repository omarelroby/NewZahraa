<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class CountriesAll extends Model
{
    protected $table='country';
    protected $fillable= ['ENGLISH_NAME','ARABIC_NAME','ALPHA2_CODE','ALPHA3_CODE'];



}
