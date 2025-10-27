<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Blog extends Model implements TranslatableContract {
    
    use Translatable;
    protected $guarded = [];

    public $translatedAttributes = [
            
        'title','body','slug','meta_keywords','meta_description'
    ];
}
