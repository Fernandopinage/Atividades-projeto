<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamados', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('atividade_id');
            /* */
            $table->string('name');
            $table->string('atividade');
            $table->text('descricao');
            /* */
            $table->date('dataentrega');
            $table->string('status');
            $table->timestamps();

            //criando a relação entre tabelas
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('atividade_id')->references('id')->on('atividades')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chamados');
    }
}
