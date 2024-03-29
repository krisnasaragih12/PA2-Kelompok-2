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
        Schema::create('orders', function (Blueprint $table){
            $table->id();
            $table->integer('id_customer');
            $table->string('nama_customer');
            $table->string('telepon');
            $table->string('alamat');
            $table->string('catatan');
            $table->string('payment_method');
            $table->integer('status');
            $table->string('gambar');
            $table->string('pemberitahuan')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
