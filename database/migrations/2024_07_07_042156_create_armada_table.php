<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArmadaTable extends Migration
{
    public function up()
    {
        Schema::create('armada', function (Blueprint $table) {
            $table->id();
            $table->string('merk', 30);
            $table->string('nopol', 20);
            $table->integer('thn_beli');
            $table->string('deskripsi', 200);
            $table->unsignedBigInteger('jenis_kendaraan_id');
            $table->integer('kapasitas_kursi');
            $table->integer('rating');
            $table->timestamps();

            $table->foreign('jenis_kendaraan_id')->references('id')->on('jenis_kendaraan')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('armada');
    }
}
