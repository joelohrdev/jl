<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bats', function (Blueprint $table) {
            $table->id();
            $table->integer('opponent_id');
            $table->integer('player_id');
            $table->integer('pa');
            $table->integer('ab');
            $table->integer('h');
            $table->integer('1b');
            $table->integer('2b');
            $table->integer('3b');
            $table->integer('hr');
            $table->integer('rbi');
            $table->integer('r');
            $table->integer('hbp');
            $table->integer('roe');
            $table->integer('fc');
            $table->integer('ci');
            $table->integer('bb');
            $table->integer('so');
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
        Schema::dropIfExists('bats');
    }
}
