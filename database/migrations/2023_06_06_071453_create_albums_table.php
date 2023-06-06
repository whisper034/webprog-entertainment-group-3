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
        Schema::create('albums', function (Blueprint $table) {
            $table->id('album_id');
            $table->unsignedBigInteger('artist_group_id');
            $table->string('album_photo_url');
            $table->string('group_photo_url');
            $table->longText('album_info');
            $table->timestamps('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at');

            $table->foreign('artist_group_id')->references('artist_group_id')->on('artist_groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
