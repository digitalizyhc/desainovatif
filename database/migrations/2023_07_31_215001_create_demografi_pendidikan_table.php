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
        Schema::create('demografi_pendidikan', function (Blueprint $table) {
            $table->id();
            $table->integer('belum_sekolah');
            $table->integer('sd');
            $table->integer('sltp');
            $table->integer('slta');
            $table->integer('diploma');
            $table->integer('sarjana');
            $table->string('tenant_id')->constrained('tenants');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demografi_pendidikan');
    }
};
