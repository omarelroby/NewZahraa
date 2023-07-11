<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructorAttachs extends Model
{
    use HasFactory;
    protected $table='instructor_attachs';
    protected $fillable=[
        'file',
        'instructor_id',
    ];
    public function instructor(){
        return $this->belongsTo(Instructor::class,'instructor_id');
    }

}
