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
        Schema::create('jadwalmatkul', function (Blueprint $table) {
            $table->id();
            $table->integer('kode');
            $table->string('matkul')->unique();
            $table->string('dosen')->unique();
            $table->string('jam')->unique();
            $table->string('kelas')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwalmatkul');
    }
};
