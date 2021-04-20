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
            $table->bigIncrements('id')->comment('รหัสผู้ใช้งาน');
            $table->string('prefix',20)->nullable()->comment('คำนำหน้า');
            $table->string('fname',100)->comment('ชื่อจริงผู้ใช้งาน');
            $table->string('lname',100)->comment('นามสกุลผู้ใช้งาน');
            $table->string('email',100)->unique()->comment('อีเมล');
            $table->string('password')->comment('ชื่อผู้ใช้งาน');
            $table->string('phone')->comment('เบอร์ผู้ใช้งาน');
            $table->timestamp('login_time')->nullable()->comment('วันเวลาที่ใช้งานล่าสุด');
            $table->char('rec_status',1)->default('0')->comment('สถานะการใช้งาน');

            $table->bigInteger('ward_id')->unsigned()->nullable()->comment('วอร์ดผู้ใช้งาน');
            $table->bigInteger('role_id')->unsigned()->comment('บทบาท');
            $table->bigInteger('permission_id')->unsigned()->nullable()->comment('สิทธิ์การใช้งาน');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('ward_id')->references('id')->on('wards');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('permission_id')->references('id')->on('permissions');

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
