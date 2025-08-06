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
        Schema::create('proglis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('jurusan');
            $table->string('judul');
            $table->string('link')->nullable();
            $table->string('dokumen')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proglis');
    }
};
