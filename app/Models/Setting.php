<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model implements TranslatableContract
{
    use Translatable;
    protected $guarded = [];

    public $translatedAttributes = [
        'system_name', 'about_us_title', 'about_us_description', 'address', 'working_times', 'home_banner_title', 'meta_description', 'footer_description', 'home_banner_text',
    ];
}
