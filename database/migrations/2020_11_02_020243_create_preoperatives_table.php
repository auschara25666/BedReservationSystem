<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreoperativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preoperatives', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('รหัสรายการเตรียมตรวจ');
            $table->string('pre_opt')->nullable()->comment('รายการเตรียมตรวจ');

            $table->char('rec_status',1)->default('0')->comment('สถานะการใช้งาน');
            $table->bigInteger('created_user_id')->unsigned()->comment('คนสร้างรายการเตรียมตรวจ');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('created_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preoperatives');
    }
}
