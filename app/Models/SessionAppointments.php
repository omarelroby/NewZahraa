<?php

namespace App\Models;


use App\Http\Resources\OnlineCourseResource;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class SessionAppointments extends Model
{

    protected $table='session_appointments';
    protected $fillable=[
        'month',
        'date',
    ];

    public function booking()
    {
        return $this->hasOne(BookingAppointments::class,'appointment_id');
    }

}
