<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBacklogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backlogs', function (Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('descricao',255);
            $table->integer('projeto_id')->unsigned();
            $table->integer('situation_id')->unsigned();
            $table->integer('responsible_id')->unsigned();
            $table->decimal('horas',15,2)->default(0.0);
            $table->decimal('conclusao',15,2)->default(0.0);
            $table->string('dependente')->nullable();
            $table->date('data_inicio')->nullable();
            $table->date('data_fim')->nullable();
            $table->text('observacao')->nullable();
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
        Schema::drop('backlogs');
    }
}
