<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIconHoisQuestMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icon_hois_quest_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('quiz_id');
            $table->boolean('is_right')->comment('Penanda apakah jawaban benar');
            $table->string('answer')->comment('Jawaban dari peserta');
            $table->timestamps();

            $table->foreign('member_id')->references('id')->on('members')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('quiz_id')->references('id')->on('icon_hois_quest_quizzes')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icon_hois_quest_members');
    }
}
