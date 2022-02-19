<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIconTalkshowMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icon_talkshow_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            $table->string('institute_name',256);
            $table->string('link_story',300);
            $table->enum('info_source', ["Media Sosial ISE! 2021",
                "Media Sosial selain ISE! 2021 (info lomba, dll)",
                "Roadshow ISE! 2021",
                "Grup WA/Line/dll",
                "Sekolah (guru, dll)",
                "Teman/keluarga",
                "Website/Aplikasi Sejuta Cita"])->nullable();
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
        Schema::dropIfExists('icon_talkshow_members');
    }
}
