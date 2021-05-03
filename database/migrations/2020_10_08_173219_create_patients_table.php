<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('รหัสผู้ป่วย');
            $table->string('hn',20)->nullable()->comment('รหัสโรงพยาบาลผู้ป่วย');
            $table->string('prefix',20)->nullable()->comment('คำนำหน้า');
            $table->string('fname',100)->nullable()->comment('ชื่อจริงผู้ป่วย');
            $table->string('lname',100)->nullable()->comment('นามสกุลผู้ป่วย');
            $table->string('age',3)->nullable()->comment('อายุผู้ป่วย');
            $table->string('sex',10)->nullable()->comment('เพศผู้ป่วย');
            $table->string('phone',20)->nullable()->comment('เบอร์ผู้ป่วย');
            $table->bigInteger('pay_id')->nullable()->unsigned()->comment('รหัสสิทธิการรักษา');

            $table->char('rec_status',1)->default('0')->comment('สถานะการใช้งาน');
            $table->bigInteger('created_user_id')->unsigned()->comment('คนสร้างผู้ป่วย');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('pay_id')->references('id')->on('payments');
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
        Schema::dropIfExists('patients');
    }
}
