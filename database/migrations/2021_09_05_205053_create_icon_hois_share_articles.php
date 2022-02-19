<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIconHoisShareArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icon_hois_share_articles', function (Blueprint $table) {
            $table->id();
            $table->string('img_path')->comment('Lokasi gambar artikel');
            $table->text('caption')->comment('Caption untuk artikel');
            $table->dateTime('start');
            $table->dateTime('end');
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
        Schema::dropIfExists('icon_hois_share_articles');
    }
}
