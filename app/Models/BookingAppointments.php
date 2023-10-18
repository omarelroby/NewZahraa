<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class BookingAppointments extends Model
{
     protected $table='booking_appointments';
     protected $fillable=[
        'name',
        'phone',
        'email',
        'payment_method',
        'session_price',
        'total_price',
        'zoom_link',
        'meeting_id',
        'start_url',
        'appointment_id',
        'country_id',
        'coupon_id',
        'discount',
        'transaction_id',
        'status',
        'read',

    ];
    public function country()
    {
        return $this->belongsTo(Country::class,'country_id');
    }
    public function coupon()
    {
        return $this->belongsTo(Coupon::class,'coupon_id');
    }
    public function appointments()
    {
        return $this->belongsTo(SessionAppointments::class,'appointment_id');
    }

}
