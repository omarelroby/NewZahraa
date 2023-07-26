<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructorRequests extends Model
{
    use HasFactory;
    protected $table='instructor_requests';
    protected $fillable=[
        'name',
        'email',
        'phone',
        'cv',
        'category_id',
        'country_id',
    ];
}
