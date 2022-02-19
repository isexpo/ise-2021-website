<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobfairMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobfair_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('member_id')->constrained();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('alamat_domisili');
            $table->text('alamat_ktp');
            $table->string('pendidikan_terakhir');
            $table->string('pendidikan_saat_ini');
            $table->string('instansi_pendidikan_saat_ini');
            $table->string('jurusan');
            $table->unsignedTinyInteger('semester')->nullable();
            $table->string('cv_path')->nullable();
            $table->string('portfolio')->nullable();
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
        Schema::dropIfExists('jobfair_members');
    }
}
