<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromoTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promo_teams', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('promo_id');
            $table->unsignedBigInteger('team_id');
            $table->string('team_type');
            $table->timestamps();

            $table->foreign('promo_id')->references('id')->on('promo_codes')->onDelete('cascade')->onUpdate('cascade');
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
