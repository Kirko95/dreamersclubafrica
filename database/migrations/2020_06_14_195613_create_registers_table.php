<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('parent', 255);
            $table->string('child', 255);
            $table->integer('child_age')->unsigned();
            $table->integer('number_of_children')->unsigned();
            $table->string('phone', 100);
            $table->string('email', 255);
            $table->enum('isInterestedInFinance', ['yes', 'no'])->nullable();
            $table->enum('package', ['school', 'home schooling','weekend','holiday camps','customized'])->nullable();
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
        Schema::dropIfExists('registers');
    }
}
