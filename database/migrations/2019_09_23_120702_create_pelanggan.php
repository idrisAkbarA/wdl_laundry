<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelanggan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->String('id')->unique(); // no hp sebagai unik id
            $table->String('id_member')->unique()->nullable(); // nama loket + increment
            $table->String('nama');
            $table->String('alamat');
            $table->int('jml_transaksi');
            $table->enum('member',['member','bukan_member']);
            $table->Double('kuota')->nullable(); //dalam kg
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
        Schema::dropIfExists('pelanggan');
    }
}
