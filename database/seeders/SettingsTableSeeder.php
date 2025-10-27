<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'id' => '1',
            'email' => 'admin@dr-mahmoud-abdelkarim.com',
            'phone' => '01000000000',
            'logo' => 'logo.png',
            'about_image' => 'about.png',
            'why_us_image' => 'why_us.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
