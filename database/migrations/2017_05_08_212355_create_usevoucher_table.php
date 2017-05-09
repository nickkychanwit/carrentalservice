<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsevoucherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('usevoucher', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('name');
        $table->string('description');
        $table->integer('discount');
        $table->string('code');
        $table->string('startDate');
        $table->string('endDate');

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
        //
    }
}
