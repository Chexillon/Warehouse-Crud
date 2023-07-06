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
        Schema::create('fg_wip_masters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_categorie');
            $table->string('nama_barang');
            $table->string('nama_customer');
            $table->string('kode_barang');
            $table->timestamps();

            $table->foreign('id_categorie')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fg_wip_masters');
    }
};
