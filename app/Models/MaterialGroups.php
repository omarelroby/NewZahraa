<?php

namespace App\Models;


use App\Http\Resources\OnlineCourses;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class MaterialGroups extends Model
{
     protected $table='material_groups';
     protected $fillable=
         [
        'material_id',
        'group_id',
    ];


}
