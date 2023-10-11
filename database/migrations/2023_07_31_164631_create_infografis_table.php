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
        Schema::create('infografis', function (Blueprint $table) {
            $table->id();
            $table->integer('luas_tanah');
            $table->text('deskripsi_luas_tanah');
            $table->integer('luas_kas');
            $table->text('deskripsi_luas_kas');
            $table->integer('luas_dhkp');
            $table->text('deskripsi_luas_dhkp');
            $table->integer('penduduk_laki_laki');
            $table->integer('penduduk_perempuan');
            $table->integer('jumlah_penduduk');
            $table->string('tenant_id')->constrained('tenants');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infografis');
    }
};
