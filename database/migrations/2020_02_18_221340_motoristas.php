<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Motoristas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_motoristas', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('nome');
            $table->integer('idade');
            $table->char('sexo');
            $table->boolean('dono_veiculo');
            $table->enum('tipo_cnh',['A','B','C','D','E']);
            $table->boolean('carregado');
            $table->unsignedBigInteger('tipos_veiculo_id');
            $table->foreign('tipos_veiculo_id')->references('id')->on('tb_tipos_caminhoes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_motoristas');
    }
}
