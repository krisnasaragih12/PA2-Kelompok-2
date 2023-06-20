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
        Schema::create('doorsmeers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('namalengkap');
            $table->string('nomortelepon');
            $table->string('tipekendaraan');
            $table->string('jenis');
            $table->date('tanggal');
            $table->string('waktu');
            $table->string('status')->default('Menunggu');
            $table->string('pemberitahuan')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doorsmeers');
    }
};
