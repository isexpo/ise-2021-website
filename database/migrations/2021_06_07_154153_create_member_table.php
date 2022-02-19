<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->enum('jenjang',['Siswa SMA','Mahasiswa','Umum']);
            $table->unsignedBigInteger('academy_id')->nullable();
            $table->string('academy_type')->nullable();
            $table->unsignedBigInteger('bionix_id')->nullable();
            $table->string('bionix_type')->nullable();
            $table->integer('hois_point')->default(0);

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
        Schema::dropIfExists('members');
    }
}
