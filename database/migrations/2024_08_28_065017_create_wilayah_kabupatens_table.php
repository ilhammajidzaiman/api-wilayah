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
        Schema::create('wilayah_kabupatens', function (Blueprint $table) {
            $table->id();
            $table->string('kode_provinsi');
            $table->foreign('kode_provinsi')
                ->references('kode')
                ->on('wilayah_provinsis')
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
        Schema::dropIfExists('wilayah_kabupatens');
    }
};
