<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beds', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('รหัสเตียง');
            $table->string('bed_number',11)->comment('หมายเลขเตียง');
            $table->string('bed_status',20)->comment('สถานะเตียง');
            $table->bigInteger('ward_id')->unsigned()->comment('รหัสวอร์ด');

            $table->char('rec_status',1)->default('0')->comment('สถานะการใช้งาน');
            $table->bigInteger('created_user_id')->unsigned()->comment('คนสร้างเตียง');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('created_user_id')->references('id')->on('users');
            $table->foreign('ward_id')->references('id')->on('wards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beds');
    }
}
