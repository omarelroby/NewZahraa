<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
     protected $table='group_appointments';
     protected $fillable=[
        'group_id',
        'appointment_date',
        'join_link',
        'start_url',
        'meeting_id',

    ];
    public function groups(){
        return $this->belongsTo(Groups::class,'group_id');
    }

}
