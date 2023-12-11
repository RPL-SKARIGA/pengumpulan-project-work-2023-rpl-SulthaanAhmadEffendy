<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('keterangan_barang');
            $table->unsignedBigInteger('id_jenis');
            $table->timestamps();

            $table->foreign('id_jenis')->references('id')->on('tb_jenis')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_barang');
    }
};
