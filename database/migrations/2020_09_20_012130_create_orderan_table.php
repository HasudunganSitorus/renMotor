<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderans', function (Blueprint $table) {
            $table->id();
            $table->decimal('durasi', 2, 1)->default(0);
            $table->decimal('jumlah', 2, 1)->default(0);
            $table->foreignId('motor_id')->constrained();
            $table->integer('perlengkapan_id');
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
        Schema::dropIfExists('orderan');
    }
}
