<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiayaserviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biayaservice', function (Blueprint $table) {
            $table->id();
            $table->string('steam');
            $table->string('karburator');
            $table->string('kelistrikan');
            $table->string('pengereman');
            $table->string('total');
            $table->integer('service_id');
            $table->date('tanggal');
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
        Schema::dropIfExists('biayaservice');
    }
}
