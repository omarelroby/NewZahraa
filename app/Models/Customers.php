<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'password',
        'phone',
        'country_id',
    ];

    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }
}
