<?php

namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['title','summary'];
    protected $fillable=[
        'image',
        'sample_file',
        'complete_file',
        'writer',
        'type',
        'amazon_url',
        'price'];
}
