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
        Schema::create('gunung', function (Blueprint $table) {
            $table->increments('id_gunung');
            $table->string('nama_gunung');
            $table->integer('harga');
            $table->string('image_gunung');
            $table->text('deskripsi');
            $table->string('link');
            $table->boolean('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gunung');
    }
};
