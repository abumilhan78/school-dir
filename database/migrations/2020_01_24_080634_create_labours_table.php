<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('nik');
            $table->string('jenis_kelamin');
            $table->date('tgl_lahir');
            $table->string('jabatan');
            $table->string('kota');
            $table->integer('gaji');
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
        Schema::dropIfExists('labours');
    }
}
