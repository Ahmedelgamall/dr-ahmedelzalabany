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
        Schema::create('step_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('step_id')->unsigned()->nullable();
            $table->foreign('step_id')->references('id')->on('steps')->onUpdate('cascade')->onDelete('cascade');
            $table->string('title',255)->nullable();
            $table->text('description')->nullable();
            $table->string('locale')->index()->nullable();
            $table->unique(['step_id', 'locale']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('step_translations');
    }
};
