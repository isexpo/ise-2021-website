<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIconAcademyStartupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icon_academy_startups', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            $table->string('institute_name');
            $table->enum('info_source', ["Media Sosial ISE! 2021",
                "Media Sosial selain ISE! 2021 (info lomba, dll)",
                "Roadshow ISE! 2021",
                "Grup WA/Line/dll",
                "Sekolah (guru, dll)",
                "Teman/keluarga",
                "Website/Aplikasi Sejuta Cita"])->nullable();
            $table->text('startup_idea');
            $table->text('reason_joining_academy')->default('');
            $table->text('expectation_joining_academy')->default('');
            $table->text('post_academy_activity')->default('');
            $table->enum('profile_verif_status', ['Belum Unggah', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak'])->default('Belum Unggah');
            $table->unsignedTinyInteger('profile_verified_by')->nullable();
            $table->text('profile_verif_comment')->nullable();
            $table->enum('academy_status', ['Proses Seleksi', 'Lolos', 'Tidak Lolos'])->default('Proses Seleksi');
            $table->unsignedBigInteger('leader_id');
            $table->unsignedBigInteger('member1_id');
            $table->unsignedBigInteger('member2_id')->nullable();
            $table->timestamps();

            $table->foreign('leader_id')->references('id')->on('icon_academy_startup_members');
            $table->foreign('member1_id')->references('id')->on('icon_academy_startup_members');
            $table->foreign('member2_id')->references('id')->on('icon_academy_startup_members');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icon_academy_startups');
    }
}
