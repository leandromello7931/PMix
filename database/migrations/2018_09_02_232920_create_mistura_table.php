<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMisturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mistura', function (Blueprint $table) {
            $table->primary(['id', 'ingredientes_id', 'nutrientes_id']);
            $table->unsignedInteger('id');
            $table->unsignedInteger('ingredientes_id');
            $table->unsignedInteger('nutrientes_id');
            
            $table->foreign('ingredientes_id')
                    ->references('id')
                    ->on('ingredientes');
            $table->foreign('nutrientes_id')
                    ->references('id')
                    ->on('nutrientes');

            $table->float('qtd_nutriente', 8, 2);
            $table->float('custo_nutriente', 8, 2);

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
        Schema::dropIfExists('mistura');
    }
}
