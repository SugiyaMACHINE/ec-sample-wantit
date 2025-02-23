<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('注文ID');
            $table->integer('user_id')->comment('ユーザーID');
            $table->string('last_name', '15')->comment('苗字');
            $table->string('first_name', '15')->comment('名前');
            $table->string('email', '30')->comment('メールアドレス');
            $table->string('tel', '11')->comment('電話番号');
            $table->string('address', '100')->comment('配送先住所');
            $table->integer('sender_id')->comment('配送元ID');
            $table->integer('postage')->nullable()->comment('送料');
            $table->integer('total_amount')->nullable()->comment('注文総額');
            $table->string('method', '7')->nullable()->comment('支払方法');
            $table->integer('payment')->nullable()->comment('入金額');
            $table->dateTime('payment_date')->nullable()->comment('入金日時');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
