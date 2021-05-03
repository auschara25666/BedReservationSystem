<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('รหัสอาจารย์แพทย์');
            $table->string('prefix',20)->comment('คำนำหน้า');
            $table->string('fname',100)->comment('ชื่อจริงอาจารย์แพทย์');
            $table->string('lname',100)->comment('นามสกุลอาจารย์แพทย์');
            // $table->bigInteger('ward_id')->unsigned()->comment('รหัสวอร์ด');
            $table->bigInteger('dept_id')->unsigned()->nullable()->comment('รหัสแผนกการรักษา');

            $table->char('rec_status',1)->default('0')->comment('สถานะการใช้งาน');
            $table->bigInteger('created_user_id')->unsigned()->comment('คนสร้างอาจารย์แพทย์');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('dept_id')->references('id')->on('departments');
            $table->foreign('created_user_id')->references('id')->on('users');
            // $table->foreign('ward_id')->references('id')->on('wards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
