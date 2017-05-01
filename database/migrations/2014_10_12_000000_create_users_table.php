<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('mobile', 15)->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('email')->comment("邮箱");
            $table->string('is_email_verify')->comment("邮箱认证");
            $table->string('nickname')->comment("昵称");
            $table->tinyInteger('sex')->comment("性别");
            $table->string('birthday', 10)->comment("出生日期: 2017-10-01");
            $table->string('avatar')->default("")->comment("头像");
            $table->text('description')->defaultNull();
            $table->string('invitation_code')->comment("邀请码");
            $table->string('access_token')->comment("api申请的access_token")->index();
            $table->integer('expire_time')->comment("过期时间");
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
