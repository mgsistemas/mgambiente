<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBatchs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batchs', function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('projeto_id')->unsigned();
            $table->string('nome',255);
            $table->string('ambiente',255);
            $table->string('execucao',100)->nullable();
            $table->string('situacao',20)->nullable();
            $table->string('saida',300)->nullable();
            $table->text('observacao')->nullable();
            $table->timestamps();
            $table->foreign('projeto_id')->references('id')->on('projetos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('batchs');
    }
}
