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
            $table->string('composer');
            $table->string('lyrics_by');
            $table->string('arranger');
            $table->string('producer');
            $table->string('co_producer');
            $table->string('ar_director');
            $table->string('director');
            $table->string('additional_data');
            $table->timestamps('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at');

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
