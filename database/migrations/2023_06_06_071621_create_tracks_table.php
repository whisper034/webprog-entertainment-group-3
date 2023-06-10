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
        Schema::create('tracks', function (Blueprint $table) {
            $table->id('track_id');
            $table->unsignedBigInteger('album_id');
            $table->string('title');
            $table->string('composer')->nullable();
            $table->string('lyrics_by')->nullable();
            $table->string('arranger')->nullable();
            $table->string('producer')->nullable();
            $table->string('co_producer')->nullable();
            $table->string('ar_director')->nullable();
            $table->string('director')->nullable();
            $table->string('additional_data')->nullable();
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('deleted_at')->nullable();

            $table->foreign('album_id')->references('album_id')->on('albums')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracks');
    }
};
