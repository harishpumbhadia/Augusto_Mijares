<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->String('row1column1_1');
            $table->String('row1column1_2');
            $table->String('row1column1_3');
            $table->String('row1column2_1');
            $table->String('row1column2_2');
            $table->String('row1column2_3');
            $table->String('row1column3_1');
            $table->String('row1column3_2');
            $table->String('row1column3_3');
            $table->String('row2column1_1');
            $table->String('row2column1_2');
            $table->String('row2column1_3');
            $table->String('row2column2_1');
            $table->String('row2column2_2');
            $table->String('row2column2_3');
            $table->String('row2column3_1');
            $table->String('row2column3_2');
            $table->String('row2column3_3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
