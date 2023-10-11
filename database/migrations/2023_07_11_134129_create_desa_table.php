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
        Schema::create('desa', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('provinsi_id')->nullable();
            $table->unsignedInteger('kabupaten_id')->nullable();
            $table->unsignedInteger('kecamatan_id')->nullable();
            $table->unsignedBigInteger('admin_desa_id')->nullable();
            $table->timestamps();

            $table->foreign('provinsi_id')->references('id')->on('provinsi')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('kabupaten_id')->references('id')->on('kabupaten')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('kecamatan_id')->references('id')->on('kecamatan')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('admin_desa_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desa');
    }
};
