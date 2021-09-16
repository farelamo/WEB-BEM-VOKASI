<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JenisKepengurusan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_kepengurusan', function(Blueprint $table){
            $table->id();
            $table->string('jenis', 100);
            $table->text('deskripsi');
            $table->string('logo', 100);
            $table->string('gambar', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Scheam::dropIfExists('jenis_kepengurusan');
    }
}
