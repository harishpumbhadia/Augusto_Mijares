<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->String('row1column1_1');
            $table->String('row1column1_2');
            $table->String('row1column2_1');
            $table->String('row1column2_2');
            $table->String('row1column3_1');
            $table->String('row1column3_2');
            $table->String('row2column1_1');
            $table->String('row2column1_2');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
