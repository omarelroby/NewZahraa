<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Customers extends Authenticatable
{
    use HasFactory;
    use HasApiTokens;


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
