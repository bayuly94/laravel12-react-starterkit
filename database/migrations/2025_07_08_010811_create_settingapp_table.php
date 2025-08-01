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
        Schema::create('settingapp', function (Blueprint $table) {
            $table->id();
            $table->string('nama_app');
            $table->text('deskripsi')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('warna')->nullable();
            $table->json('seo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settingapp');
    }
};
