<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('รหัสสิทธิการรักษา');
            $table->string('name',100)->comment('สิทธิการรักษา');
            $table->bigInteger('ward_id')->unsigned()->comment('รหัสวอร์ด');

            $table->char('rec_status',1)->default('0')->comment('สถานะการใช้งาน');
            $table->bigInteger('created_user_id')->unsigned()->comment('คนสร้างสิทธิการรักษา');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('ward_id')->references('id')->on('wards');
            $table->foreign('created_user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
