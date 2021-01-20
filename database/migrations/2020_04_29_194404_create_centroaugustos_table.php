<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentroaugustosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centroaugustos', function (Blueprint $table) {
            $table->String('row1column1');
            $table->String('row1column2');
            $table->String('row2column1');
            $table->String('row3column1');
            $table->String('row3column2');
            $table->String('row3column3');
            $table->String('row4column1');
            $table->String('row4column2');
            $table->String('row4column3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centroaugustos');
    }
}
