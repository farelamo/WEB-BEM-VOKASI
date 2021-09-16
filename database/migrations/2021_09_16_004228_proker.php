<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proker', function(Blueprint $table){
            $table->id();
            $table->string('judul_proker', 100);
            $table->string('gambar', 100);
            $table->enum('tipe', ['besar', 'kecil']);
            $table->UnsignedBigInteger('jenis_kepengurusan_id');
            $table->foreign('jenis_kepengurusan_id')
            ->references('id')
            ->on('jenis_kepengurusan')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proker');
    }
}
