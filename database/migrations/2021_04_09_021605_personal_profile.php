<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonalProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_profile', function (Blueprint $table) {
            $table->id();
            $table->string('avatar')->default('user.jpg');
            $table->string('name');
            $table->boolean('gender');
            $table->dateTime('birth');
            $table->string('national');
            $table->string('country');
            $table->string('address');
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
        Schema::dropIfExists('personal_profile');
    }
}
