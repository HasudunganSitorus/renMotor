<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUlasanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     /* 
       public function up()
    {
        Schema::create('motor_penyewa', function (Blueprint $table) {
            $table->id();
            $table->integer('motor_id');
            $table->integer('penyewa_id');
        });
    }
     */
    public function up()
    {
        Schema::create('ulasan', function (Blueprint $table) {
            $table->id();
            $table->text('keterangan');
            $table->integer('motor_id');
            $table->integer('penyewa_id');
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
        Schema::dropIfExists('ulasan');
    }
}
