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
        Schema::create('detail_perizinan', function (Blueprint $table) {
            $table->integer('id_perizinan')->nullable()->unsigned();
            $table->integer('id_gunung')->nullable()->unsigned();
            $table->integer('total_harga');
            $table->boolean('status_nama')->default(0);
            $table->boolean('status_tgl_lahir')->default(0);
            $table->boolean('status_alamat')->default(0);
            $table->boolean('status_notelp')->default(0);
            $table->boolean('status_notelpkel')->default(0);
            $table->boolean('status_gunung')->default(0);
            $table->integer('status_pesan')->default(0);
            $table->boolean('status_ktp')->default(0);
            $table->boolean('status_sks')->default(0);

            $table->foreign('id_perizinan', 'fk_pemesanan')->references('id_perizinan')->on('perizinan');
            $table->foreign('id_gunung', 'fk_gunung')->references('id_gunung')->on('gunung');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_perizinan');
    }
};
