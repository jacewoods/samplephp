<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('firstname');
          $table->string('lastname');
          $table->string('email');
          $table->string('address1')->nullable();
          $table->string('address2')->nullable();
          $table->string('city')->nullable();
          $table->string('state')->nullable();
          $table->string('zip')->nullable();
          $table->string('country')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
