<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->string('id')->unique(); // loket|tgl|id_pelanggan
            $table->dateTime('tanggal');
            $table->string('jasa'); // " jasa1:berat|jasa2:berat.... "
            $table->enum('status',['diproses','selesai','lunas']);
            $table->string('id_pelanggan'); // " ambil dari tabel pelanggan"
            $table->string('id_loket'); // " ambil dari tabel loket"
            $table->double('total'); // " total pembayaran"
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
        Schema::dropIfExists('transaksi');
    }
}
