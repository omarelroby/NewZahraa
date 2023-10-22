<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class ApplyJob extends Model
{
      protected $table='apply_job';
     protected $fillable=['name','phone','email','cv','job_id','read'];


}
