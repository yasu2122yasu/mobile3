<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');  //プランID
            $table->string('plan_name', 50);  //提供プラン、50文字以内
            $table->integer('mobile_GB'); //モバイル容量
            $table->integer('mobile_limited_speed');  //通信制限時の速度
            $table->integer('mobile_fees');  //携帯料金
            $table->integer('internet_type');  //光回線かWi-fiの選択
            $table->integer('internet_GB');  //インターネット容量
            $table->integer('internet_speed');  //インターネットの回線速度
            $table->integer('internet_fees');  //インターネットの料金
            $table->text('recommendation');  //推薦コメント
            $table->SoftDeletes();   //論理削除
            $table->timestamp('created_at')->useCurrent()->nullable();
            $table->timestamp('updated_at')->useCurrent()->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}