<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ユーザーID');
            $table->string('user_name', '15')->unique()->comment('ユーザー名');
            $table->string('last_name', '15')->nullable()->comment('苗字');
            $table->string('first_name', '15')->nullable()->comment('名前');
            $table->string('last_kana', '15')->nullable()->comment('苗字カナ');
            $table->string('first_kana', '15')->nullable()->comment('名前カナ');
            $table->string('email', '30')->unique()->comment('メールアドレス');
            $table->dateTime('email_verified_at')->nullable()->comment('メールアドレス最終更新日');
            $table->string('password', '100')->comment('パスワード');
            $table->string('tel', '11')->nullable()->comment('電話番号');
            $table->string('postal_code', '7')->nullable()->comment('郵便番号');
            $table->string('address', '100')->nullable()->comment('住所');
            $table->string('remember_token', '100')->nullable()->comment('ログイン維持用トークン');
            $table->dateTime('deleted_at')->nullable()->comment('論理削除日時');
            $table->integer('breach')->nullable()->comment('違反回数');
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
        Schema::dropIfExists('users');
    }
}
