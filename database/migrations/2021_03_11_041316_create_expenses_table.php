<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('รหัสค่าใช้จ่าย');
            $table->bigInteger('reserve_id')->nullable()->unsigned()->comment('รหัสการจอง');
            $table->string('total',7)->nullable()->comment('ค่าใช้จ่ายทั้งหมด');
            $table->string('total_re',7)->nullable()->comment('ค่าใช้จ่ายที่เบิกได้');
            $table->string('total_se',7)->nullable()->comment('ค่าใช้จ่ายที่จ่ายเอง');

            $table->bigInteger('created_user_id')->unsigned()->comment('คนสร้างค่าใช้จ่าย');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('reserve_id')->references('id')->on('reservations');
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
        Schema::dropIfExists('expenses');
    }
}
