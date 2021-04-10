<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DesiredJob extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desired_job', function (Blueprint $table) {
            $table->id();
            $table->string('level');
            $table->float('salary',10,2);
            $table->string('objectives');
            $table->string('experience');
            $table->string('education');
            $table->string('skills');
            $table->string('industry');
            $table->string('location');
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
        Schema::dropIfExists('desired_job');
    }
}
