<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('รหัสการจอง');
            $table->string('reserve_status',100)->nullable()->comment('สถานะการจอง');
            $table->bigInteger('patient_id')->nullable()->unsigned()->comment('รหัสผู้ป่วย');
            $table->bigInteger('ward_enter')->nullable()->unsigned()->comment('รหัสวอร์ดต้นทาง');
            $table->bigInteger('ward_id')->nullable()->unsigned()->comment('รหัสวอร์ดที่ต้องการเข้า');
            $table->bigInteger('opt_id')->nullable()->unsigned()->comment('รหัสหัตถการ');
            $table->date('reserve_booking')->nullable()->comment('วันที่ต้องการจอง');
            $table->bigInteger('doctor_id')->nullable()->unsigned()->comment('อาจารย์แพทย์');
            $table->text('disease')->nullable()->comment('วินิจฉัยโรค');
            $table->text('reserve_detail')->nullable()->comment('รายละเอียดการจอง');
            $table->text('complication')->nullable()->comment('ภาวะแทรกซ้อน');
            $table->bigInteger('bed_id')->nullable()->unsigned()->comment('รหัสเตียง');

            $table->char('rec_status',1)->nullable()->comment('สถานะการใช้งาน');
            $table->bigInteger('created_user_id')->nullable()->unsigned()->comment('คนสร้างรายการจอง');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('ward_id')->references('id')->on('wards');
            $table->foreign('ward_enter')->references('id')->on('wards');
            $table->foreign('opt_id')->references('id')->on('operatives');
            $table->foreign('created_user_id')->references('id')->on('users');
            $table->foreign('doctor_id')->references('id')->on('doctors');
            $table->foreign('bed_id')->references('id')->on('beds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
