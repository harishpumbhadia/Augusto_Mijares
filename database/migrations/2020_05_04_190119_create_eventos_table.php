<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
             $table->String('row1column1_1');
            $table->String('row1column1_2');
            $table->String('row1column1_3');
            $table->String('row1column1_4');
            $table->String('row1column1_5');
            $table->String('row1column1_6');
            $table->String('row1column1_7');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
