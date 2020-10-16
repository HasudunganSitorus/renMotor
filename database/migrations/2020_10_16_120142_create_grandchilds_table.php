<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrandchildsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grandchilds', function (Blueprint $table) {
            $table->id();
            $table->char('name');
            $table->char('gender');
            $table->unsignedBigInteger('parent_id')->index();
            $table->unsignedBigInteger('grandchild_id')->index();
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
        Schema::dropIfExists('grandchilds');
    }
}
