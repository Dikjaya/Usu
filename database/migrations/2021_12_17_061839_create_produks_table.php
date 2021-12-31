<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->text('deskripsi_produk');
            $table->string('harga_produk');
            $table->string('keterangan_produk');
            $table->foreignId('id_kecamatan');
            $table->string('instagram')->nullable();
            $table->string('toko_online')->nullable();
            $table->string('whatsapp')->nullable();
            $table->enum('legalitas', ['sudah', 'belum',]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
}
