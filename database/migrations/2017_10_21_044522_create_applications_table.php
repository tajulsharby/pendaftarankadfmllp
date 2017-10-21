<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campaign_id');
            $table->string('name');
            $table->integer('id_type')->references('id')->on('idtypes');
            $table->string('id_number');
            $table->integer('jersey_number')->nullable();
            $table->integer('organization_id')->references('id')->on('organizations')->nullable();
            $table->integer('category_id')->references('id')->on('categories');
            $table->integer('subcategory_id')->references('id')->on('subcategories');
            $table->string('email');
            $table->string('phone_number');
            $table->string('photo_src');
            $table->integer('bank_id')->references('id')->on('banks')->nullable();
            $table->string('account_number')->nullable();
            $table->string('status')->default('DRAFT');
            $table->string('is_archived')->default('NO');
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
        Schema::dropIfExists('applications');
    }
}
