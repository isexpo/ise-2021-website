<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIconHoisShareMembers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icon_hois_share_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('article_id');
            $table->enum('platform', ['Instagram', 'Line', 'Whatsapp'])->comment('Platform share artikel');
            $table->string('ss_path');
            $table->boolean('is_accepted')->default(0);
            $table->timestamps();

            $table->foreign('member_id')->references('id')->on('members')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('article_id')->references('id')->on('icon_hois_share_articles')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icon_hois_share_members');
    }
}
