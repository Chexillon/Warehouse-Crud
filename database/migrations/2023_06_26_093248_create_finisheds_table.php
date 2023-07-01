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
        Schema::create('finished', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->string('nama_customer');
            $table->date('tanggal');
            $table->enum('role', [1, 2])->comment('Barang Jadi = 1, Barang Setengah Jadi = 2');            $table->timestamps();
            $table->integer('jumlah');



            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finished');
    }
};
