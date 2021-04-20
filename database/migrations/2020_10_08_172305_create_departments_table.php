<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('รหัสสายการรักษา');
            $table->string('name_eng',150)->comment('ชื่อสายการรักษาภาษาอังกฤษ');
            $table->string('name_th',150)->comment('ชื่อสายการรักษาภาษาไทย');
            $table->string('name_abb',10)->comment('ตัวย่อสายการรักษา');
            $table->char('rec_status',1)->default('0')->comment('สถานะการใช้งาน');
            $table->bigInteger('created_user_id')->unsigned()->comment('คนสร้างสายการรักษา');
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
        Schema::dropIfExists('departments');
    }
}
