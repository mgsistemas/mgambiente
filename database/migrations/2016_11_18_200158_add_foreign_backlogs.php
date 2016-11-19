<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignBacklogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('backlogs', function (Blueprint $table){
            $table->foreign('projeto_id')->references('id')->on('projetos');
            $table->foreign('situation_id')->references('id')->on('situations');
            $table->foreign('responsible_id')->references('id')->on('responsibles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropForeign('backlogs_projeto_id_foreign');
        Schema::dropForeign('backlogs_situation_id_foreign');
        Schema::dropForeign('backlogs_responsible_id_foreign');
    }
}
