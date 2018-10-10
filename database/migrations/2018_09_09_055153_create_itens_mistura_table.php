<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItensMisturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itens_mistura', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_mistura');
            $table->unsignedInteger('id_ingrediente');
            $table->unsignedInteger('id_nutriente');

            $table->foreign('id_mistura')
                ->references('id')
                ->on('misturas')
                ->onDelete('cascade');
            
            $table->foreign('id_ingrediente')
                    ->references('id')
                    ->on('ingredientes')
                    ->onDelete('cascade');

            $table->foreign('id_nutriente')
                    ->references('id')
                    ->on('nutrientes')
                    ->onDelete('cascade');

            $table->float('valor_ingredxnutr', 8, 2)->nullable();
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
        Schema::dropIfExists('itens_mistura');
    }
}
