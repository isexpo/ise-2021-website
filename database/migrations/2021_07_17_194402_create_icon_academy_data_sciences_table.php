<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIconAcademyDataSciencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icon_academy_data_sciences', function (Blueprint $table) {
            $table->id();
            $table->string('institute_name');
            $table->string('major');
            $table->enum('info_source', ["Media Sosial ISE! 2021",
                "Media Sosial selain ISE! 2021 (info lomba, dll)",
                "Roadshow ISE! 2021",
                "Grup WA/Line/dll",
                "Sekolah (guru, dll)",
                "Teman/keluarga",
                "Website/Aplikasi Sejuta Cita"])->nullable();
            $table->text('reason_joining_academy');
            $table->text('post_academy_activity');
            $table->string('hackerrank_profile_link')->nullable();
            $table->string('link_twibbon')->nullable();
            $table->enum('gender', ['Laki-laki','Perempuan']);
            $table->string('identity_card_path')->nullable();
            $table->enum('profile_verif_status', ['Belum Unggah', 'Tahap Verifikasi', 'Terverifikasi', 'Ditolak'])->default('Belum Unggah');
            $table->unsignedTinyInteger('profile_verified_by')->nullable();
            $table->text('profile_verif_comment')->nullable();
            $table->enum('academy_status', ['Proses Seleksi', 'Lolos', 'Tidak Lolos'])->default('Proses Seleksi');
            $table->string('cv_path')->nullable();
            $table->timestamps();

            $table->foreign('profile_verified_by')->references('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icon_academy_data_sciences');
    }
}
