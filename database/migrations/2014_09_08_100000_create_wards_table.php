<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wards', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('รหัสวอร์ด');
            $table->string('ward_name',100)->comment('ชื่อวอร์ด');
            $table->string('ward_phone',50)->nullable()->comment('เบอร์โทรวอร์ด');
            $table->string('ward_phoneext',50)->nullable()->comment('เบอร์โทรศัพท์ติดต่อภายใน');

            $table->char('rec_status',1)->default('1')->comment('สถานะการใช้งาน');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wards');
    }
}
