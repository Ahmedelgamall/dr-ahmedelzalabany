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
        Schema::table('settings', function (Blueprint $table) {
            $table->string('facebook_link',500)->nullable();
            $table->string('twitter_link',500)->nullable();
            $table->string('youtube_link',500)->nullable();
            $table->string('home_banner_image',255)->nullable();
            $table->string('steps_image',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('settings', function (Blueprint $table) {
            $table->dropColumn('facebook_link');
            $table->dropColumn('twitter_link');
            $table->dropColumn('youtube_link');
            $table->dropColumn('home_banner_image');
            $table->dropColumn('steps_image');
        });
    }
};
