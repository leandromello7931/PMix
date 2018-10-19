<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMisturaRestricaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('misturas_restricoes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_mistura');
            $table->unsignedInteger('id_nutriente');
            $table->unsignedInteger('id_restricao');

            $table->foreign('id_mistura')
                ->references('id')
                ->on('misturas')
                ->onDelete('cascade');

            
            $table->foreign('id_nutriente')
                    ->references('id')
                    ->on('nutrientes')
                    ->onDelete('cascade');

            $table->foreign('id_restricao')
                    ->references('id')
                    ->on('restricoes')
                    ->onDelete('cascade');

            $table->float('valor_restricao', 8, 2)->nullable();

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
        Schema::dropIfExists('misturas_restricoes');
    }
}
