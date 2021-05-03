<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operatives', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('รหัสหัตถการ');
            $table->string('opt_name')->comment('ชื่อหัตถการ');
            // $table->bigInteger('ward_id')->unsigned()->comment('รหัสวอร์ด');

            $table->char('rec_status',1)->default('0')->comment('สถานะการใช้งาน');
            $table->bigInteger('created_user_id')->unsigned()->comment('คนสร้างหัตถการ');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('created_user_id')->references('id')->on('users');
            // $table->foreign('ward_id')->references('ward_id')->on('wards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operatives');
    }
}
