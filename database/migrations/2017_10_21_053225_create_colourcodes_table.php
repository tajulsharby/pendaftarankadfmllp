<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColourcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colourcodes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campaign_id')->references('id')->on('campaigns');
            $table->string('attribute_type');
            $table->integer('attribute_id');            
            $table->string('colour_code');
            $table->string('status')->default('ACTIVE');
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
        Schema::dropIfExists('colourcodes');
    }
}
