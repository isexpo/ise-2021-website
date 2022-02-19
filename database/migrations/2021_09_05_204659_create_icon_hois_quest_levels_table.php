<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIconHoisQuestLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icon_hois_quest_levels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Nama Level');
            $table->date('open_time')->comment('Waktu Level bisa dikerjakan');
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
        Schema::dropIfExists('icon_hois_quest_levels');
    }
}
