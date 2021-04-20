<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('รหัสเหตุการณ์');
            $table->char('event_status')->default('1')->comment('สถานะเหตุการณ์');
            $table->date('date')->nullable()->comment('วันเวลาที่สร้างเหตุการณ์');
            $table->text('detail')->nullable()->comment('รายละเอียดการอนุมัติ');
            $table->bigInteger('reserve_id')->nullable()->unsigned()->comment('รหัสการจอง');

            $table->char('rec_status',1)->default('0')->comment('สถานะการใช้งาน');
            $table->bigInteger('created_user_id')->unsigned()->comment('คนสร้างเหตุการณ์');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('reserve_id')->references('id')->on('reservations');
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
        Schema::dropIfExists('events');
    }
}
