<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIconHoisQuestQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icon_hois_quest_quizzes', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['Pilgan', 'Isian', 'ToF'])->comment('Pilgan : Pilihan Ganda, Isian : isian singkat, ToF : Benar atau salah');
            $table->string('question')->comment('Soal kuis');
            $table->string('img_path')->comment('Gambar soal apabila ada')->nullable();
            $table->string('opt_a')->comment('Opsi jawaban A apabila tipe soal Pilgan')->nullable();
            $table->string('opt_b')->comment('Opsi jawaban B apabila tipe soal Pilgan')->nullable();
            $table->string('opt_c')->comment('Opsi jawaban C apabila tipe soal Pilgan')->nullable();
            $table->string('opt_d')->comment('Opsi jawaban D apabila tipe soal Pilgan')->nullable();
            $table->string('answer')->comment('Jawaban kuis, isikan abjad (A/B/C/D) untuk pilgan, isikan jawaban biasa untuk isian, isikan true atau false untuk ToF');
            $table->text('explanation')->comment('Penjelasan terkait kuis');
            $table->unsignedBigInteger('quest_level_id')->comment('Foreign Key untuk tabel level')->nullable();
            $table->timestamps();

            $table->foreign('quest_level_id')->references('id')->on('icon_hois_quest_levels')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icon_hois_quest_quizzes');
    }
}


