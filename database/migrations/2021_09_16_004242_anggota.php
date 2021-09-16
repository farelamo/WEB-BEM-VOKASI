<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Anggota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function(Blueprint $table){
            $table->id();
            $table->string('nama', 100);
            $table->string('prodi', 225);
            $table->string('foto', 100);
            $table->enum('gender', ['L', 'P']);
            $table->string('jabatan', 50);
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
        Schema::dropIfExists('anggota');
    }
}
