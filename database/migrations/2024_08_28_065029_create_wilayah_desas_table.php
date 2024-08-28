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
        Schema::create('wilayah_desas', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kecamatan');
            $table->foreign('kode_kecamatan')
                ->references('kode')
                ->on('wilayah_kecamatans')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('kode')
                ->unique();
            $table->string('nama');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wilayah_desas');
    }
};
