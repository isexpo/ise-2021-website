<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIconAcademySubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icon_academy_submissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('task_id');
            $table->unsignedBigInteger('member_id');
            $table->string('member_type');
            $table->string('file_path');
            $table->dateTime('submit_time');
            $table->string('evaluation_file_path')->nullable();
            $table->text('evaluation_comment')->nullable();
            $table->timestamps();

            $table->foreign('task_id')->references('id')->on('icon_academy_tasks')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icon_academy_submissions');
    }
}
