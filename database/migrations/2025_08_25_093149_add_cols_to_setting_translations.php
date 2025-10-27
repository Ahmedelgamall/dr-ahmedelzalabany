<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('setting_translations', function (Blueprint $table) {
            $table->text('home_banner_text')->nullable();
            $table->text('footer_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('setting_translations', function (Blueprint $table) {
            $table->dropColumn('home_banner_text');
            $table->dropColumn('footer_description');
        });
    }
};
