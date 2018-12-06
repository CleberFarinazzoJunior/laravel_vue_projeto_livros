<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaLivros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {

            //TODO: ver como definir se campos são null ou not null
            
            $table->increments('id');

            $table->string('isbn')->unique();
            $table->string('titulo');
            $table->string('autor');
            $table->integer('paginas');
            $table->integer('anoLancamento');
            $table->string('editora');
            $table->string('edicao');
            $table->string('genero');
            $table->string('descricao')->nullable();

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
        Schema::dropIfExists('livros');
    }
}
