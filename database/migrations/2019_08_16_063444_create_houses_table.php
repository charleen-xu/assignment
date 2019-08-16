<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->bigIncrements('id');  //代表資料成功建立時自動增加id編號。
            $table->string('city');                //城市
            $table->string('district');            //區域
            $table->string('kind');                //房型
            $table->string('area');                //坪數
            $table->integer('pattern');            //房間數 
            $table->integer('price');              //租金
            $table->timestamps(); //migrate後會看到多了兩個欄位created_at和updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
