<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 150);
            $table->string('stazione_partenza', 100);
            $table->string('stazione_arrivo', 100);
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->date('data_partenza');
            $table->date('data_arrivo');
            $table->smallInteger('codice_treno');
            $table->tinyInteger('numero_carrozze');
            $table->boolean('in_orario')->default(1);
            $table->boolean('cancellato')->default(0);
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
        Schema::dropIfExists('trains');
    }
}
