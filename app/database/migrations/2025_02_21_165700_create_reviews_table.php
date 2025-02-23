<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('レビューID');
            $table->string('title', '')->comment('タイトル');
            $table->string('body', '')->comment('本文');
            $table->integer('rate')->comment('評価値');
            $table->string('image', '')->nullable()->comment('投稿画像');
            $table->integer('item_id')->comment('アイテムID');
            $table->integer('user_id')->comment('ユーザーID');
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
        Schema::dropIfExists('reviews');
    }
}
