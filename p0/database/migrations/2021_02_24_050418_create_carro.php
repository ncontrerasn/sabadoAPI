<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carro', function (Blueprint $table) {
            $table->id();
            $table->string('modelo');
            $table->bigInteger('persona_id')->unsigned();
            $table->foreign('persona_id')
                    ->references('id')
                    ->on('persona')
                    ->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carro');
    }
}
