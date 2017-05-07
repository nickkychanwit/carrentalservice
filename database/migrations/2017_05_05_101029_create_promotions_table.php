<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('promotions', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('startDate');
          $table->string('expDate');
          $table->string('img');
          $table->string('dcType');
          $table->integer('dc');
          $table->string('descript') ->fulltext();
          $table->timestamps();
          $table->softDeletes();

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
