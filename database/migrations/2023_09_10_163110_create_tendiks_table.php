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
        Schema::create('tendiks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nip')->nullable();
            $table->string('nama');
            $table->string('lahir');
            $table->string('jkel');
            $table->string('status');
            $table->string('pendidikan');
            $table->string('agama');
            $table->string('alamat');
            $table->string('foto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tendiks');
    }
};
