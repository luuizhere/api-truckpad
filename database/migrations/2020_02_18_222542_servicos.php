<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Servicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_servicos', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('cidade_origem');
            $table->string('cidade_destino');
            $table->char('estado_origem',2);
            $table->char('estado_destino',2);
            $table->string('rua_origem');
            $table->string('rua_destino');
            $table->string('lat_origem')->nullable();
            $table->string('lat_destino')->nullable();
            $table->string('long_origem')->nullable();
            $table->string('long_destino')->nullable();
            $table->unsignedBigInteger('motorista_id');
            $table->foreign('motorista_id')->references('id')->on('tb_motoristas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_servicos');
    }
}
