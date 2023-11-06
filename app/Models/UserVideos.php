<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class UserVideos extends Model
{
   protected $table='user_videos';

     protected $fillable=[
        'id',
        'user_id',
        'video_id',

    ];

}
