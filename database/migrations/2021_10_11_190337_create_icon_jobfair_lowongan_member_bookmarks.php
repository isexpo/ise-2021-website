<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIconJobfairLowonganMemberBookmarks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icon_jobfair_lowongan_member_bookmarks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lowongan_id');
            $table->unsignedBigInteger('member_id');
            $table->timestamps();

            $table->foreign('lowongan_id')->references('id')->on('icon_jobfair_lowongans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('member_id')->references('id')->on('members')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icon_jobfair_lowongan_member_bookmark');
    }
}
