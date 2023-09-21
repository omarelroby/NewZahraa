<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class WithDrawRequest extends Model
{

    protected $table='withdraw_request';
    protected $fillable=['cash','instructor_id','status','approved_date'];



}
