<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_data_buku', function (Blueprint $table) {
            $table->increments('id');
            $table->usignedInteger('user_id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('images');
            $table->string('telphone');
            $table->string('gender');
            $table->string('agama');
            $table->string('tgl_lahir');
            $table->string('tmpt_lahir');
            $table->string('asal_sekolah');
            $table->string('nama_ibu');
            $table->string('nama_ayah');
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
        Schema::dropIfExists('_data_buku');
    }
}
