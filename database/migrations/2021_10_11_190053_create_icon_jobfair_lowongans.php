<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIconJobfairLowongans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icon_jobfair_lowongans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ['Full-Time', 'Part-Time', 'Internship']);
            $table->text('desc');
            $table->text('requirement');
            $table->boolean('need_portfolio')->default(0);
            $table->boolean('need_personal_letter')->default(0);
            $table->unsignedBigInteger('perusahaan_id');
            $table->timestamps();

            $table->foreign('perusahaan_id')->references('id')->on('icon_jobfair_perusahaans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icon_jobfair_lowongan');
    }
}
