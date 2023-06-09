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
        // pas mau milih salah satu albumnya, gambarnya dihardcode aja
        Schema::create('albums', function (Blueprint $table) {
            $table->id('album_id');
            $table->unsignedBigInteger('artist_group_id');
            $table->string('artist_album_photo_url');
            $table->string('artist_album_photo_url_hovered');
            $table->string('album_photo_url');
            $table->string('artist_group_photo_url');
            $table->string('artist_group_album_url');
            $table->longText('album_info');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('deleted_at')->nullable();

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
