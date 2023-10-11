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
        Schema::create('demografi_pekerjaan', function (Blueprint $table) {
            $table->id();
            $table->integer('belum_bekerja');
            $table->integer('rumah_tangga');
            $table->integer('pelajar');
            $table->integer('wiraswasta');
            $table->integer('buruh');
            $table->integer('pns');
            $table->integer('karyawan');
            $table->integer('petani');
            $table->integer('other');
            $table->string('tenant_id')->constrained('tenants');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demografi_pekerjaan');
    }
};
