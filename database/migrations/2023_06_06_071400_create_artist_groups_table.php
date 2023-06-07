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
        Schema::create('artist_groups', function (Blueprint $table) {
            $table->id('artist_group_id');
            $table->string('group_name');
            $table->string('group_photo_url');
            $table->string('group_photo_url_hovered');
            $table->timestamps('created_at');
            $table->dateTime('updated_at');
            $table->dateTime('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artist_groups');
    }
};
