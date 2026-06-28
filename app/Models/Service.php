<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Service extends Model implements TranslatableContract {
    
    use Translatable;
    protected $guarded = [];

    protected $casts = [
        'faqs' => 'array',
    ];

    public $translatedAttributes = [
        'title','description','meta_description','meta_title','short_description'
    ];
}
