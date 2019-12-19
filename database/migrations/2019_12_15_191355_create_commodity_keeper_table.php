<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommodityKeeperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commodity_keeper', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->primary(['commodity_id','keeper_id']);
            $table->bigInteger('commodity_id')->unsigned();
            $table->bigInteger('keeper_id')->unsigned();
            $table->timestamps();

            $table->foreign('commodity_id')->references('id')->
             on('commodities')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('Keeper_id')->references('id')->
             on('keepers')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commodity_keeper');
    }
}
