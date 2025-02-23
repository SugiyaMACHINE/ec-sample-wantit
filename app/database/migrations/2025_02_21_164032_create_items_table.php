<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('アイテムID');
            $table->string('product_name', '50')->comment('アイテム名');
            $table->integer('company_id')->nullable()->comment('企業id');
            $table->string('body', '1000')->comment('商品説明文');
            $table->string('specifications', '100')->nullable()->comment('商品仕様');
            $table->string('image', '200')->nullable()->comment('商品画像');
            $table->string('type_id', '30')->nullable()->comment('カテゴリー');
            $table->boolean('on_sale_flg')->default('0')->comment('販売中フラグ');
            $table->integer('price')->comment('価格');
            $table->integer('reduced_price')->nullable()->comment('割引価格');
            $table->string('stock', '15')->default('0')->comment('在庫数');
            $table->string('sold', '15')->default('0')->comment('販売数');
            $table->dateTime('deleted_at')->nullable()->comment('論理削除日時');
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
        Schema::dropIfExists('items');
    }
}
