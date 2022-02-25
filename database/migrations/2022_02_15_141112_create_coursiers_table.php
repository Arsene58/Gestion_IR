<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coursiers', function (Blueprint $table) {
            $table->id();
            $table->string('position', 70)->nullable();
            $table->string('validation', 70)->nullable();
            $table->string('motif', 70)->nullable();
            $table->dateTime('depart');
            $table->dateTime('arriver');
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
        Schema::dropIfExists('coursiers');
    }
}
