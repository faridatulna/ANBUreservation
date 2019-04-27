<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('nrp', 14)->unique();
            $table->string('email')->unique();
            $table->integer('id_lab')->unsigned();
            $table->foreign('id_lab')->references('id')->on('laboratories');
            $table->integer('no_pc')->unsigned();
            $table->string('no_hp');
            $table->text('proposal');
            $table->integer('status');
            $table->date('tgl_pinjam');
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
        Schema::dropIfExists('reservations');
    }
}
