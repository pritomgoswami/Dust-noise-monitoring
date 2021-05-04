<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmdmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmdms', function (Blueprint $table) {
            $table->id();
          
            $table->timestamps();
            $table->integer('node_id');
            $table->float('dusts');
            $table->float('sounds');
            $table->float('temps');
            $table->float('hums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tmdms');
    }
}
