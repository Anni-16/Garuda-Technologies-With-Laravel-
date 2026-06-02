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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('heading_1');
            $table->text('images_1')->nullable();
            $table->text('descrpition')->nullable();
            $table->string('heading_2')->nullable();
            $table->text('short_descrpition')->nullable();
            $table->text('images_2')->nullable();
            $table->text('images_3')->nullable();
            $table->integer('experience_of_year')->nullable();
            $table->string('our_mission')->nullable();
            $table->text('content_1')->nullable();
            $table->string('our_vision')->nullable();
            $table->text('content_2')->nullable();
            $table->string('heading_3')->nullable();
            $table->text('content_3')->nullable();
            $table->text('images_4')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->json('meta_keywords')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
