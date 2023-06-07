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
        Schema::create('artists', function (Blueprint $table) {
            $table->id('artist_id');
            $table->unsignedBigInteger('artist_group_id');
            $table->string('name');
            $table->string('date_of_birth');
            $table->string('photo_url');
            $table->string('photo_url_hovered');
            $table->longText('biodata');
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
        Schema::dropIfExists('artists');
    }
};
