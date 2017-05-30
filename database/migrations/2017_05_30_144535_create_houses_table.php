<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipus', ['Pis','Adosat','Xalet','Casa']);
            $table->enum('zona', ['Centre','Afores',"Urbanització l'Estada"]);
            $table->string('adreca', 100);
            $table->enum('numHabitacions', ['1','2','3','4','5'])->default('3');
            $table->float('preu', 10, 2);
            $table->float('mida', 6, 2);
            $table->text('extres')->nullable();
            $table->text('observacions')->nullable();
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
        Schema::dropIfExists('houses');
    }
}
