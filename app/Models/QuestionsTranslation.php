<?php

namespace App\Models;


 use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
 use Astrotomic\Translatable\Translatable;
 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;

class QuestionsTranslation extends Model
{
    use HasFactory;
    protected $table='questions_translations';
    protected $fillable = ['question','answer'];
    public $timestamps = false;







}
