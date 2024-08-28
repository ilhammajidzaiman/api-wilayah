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
        Schema::create('wilayah_kecamatans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kabupaten');
            $table->foreign('kode_kabupaten')
                ->references('kode')
                ->on('wilayah_kabupatens')
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
        Schema::dropIfExists('wilayah_kecamatans');
    }
};
