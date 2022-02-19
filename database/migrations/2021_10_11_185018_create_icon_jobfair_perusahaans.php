<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIconJobfairPerusahaans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icon_jobfair_perusahaans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company_url');
            $table->string('logo_path');
            $table->text('desc');
            $table->boolean('is_desc_video');
            $table->string('media_path')->comment('Isinya link youtube atau path gambar (apabila is_desc_video false)');
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
        Schema::dropIfExists('icon_jobfair_perusahaan');
    }
}
