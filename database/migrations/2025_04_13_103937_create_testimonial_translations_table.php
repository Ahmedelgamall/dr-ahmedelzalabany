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
        Schema::create('testimonial_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('testimonial_id')->unsigned()->nullable();
            $table->foreign('testimonial_id')->references('id')->on('testimonials')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name',255)->nullable();
            $table->text('opinion')->nullable();
            $table->string('locale')->index()->nullable();
            $table->unique(['testimonial_id', 'locale']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonial_translations');
    }
};
