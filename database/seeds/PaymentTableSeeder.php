<?php

use Illuminate\Database\Seeder;
use App\Payment;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([
            'name' => 'เบิกได้',
            'created_user_id' => 2,
            'rec_status' => 1,
        ]);
        Payment::create([
            'name' => 'จ่ายตรง',
            'created_user_id' => 2,
            'rec_status' => 1,
        ]);
        Payment::create([
            'name' => 'รัฐวิสาหกิจ',
            'created_user_id' => 2,
            'rec_status' => 1,
        ]);
        Payment::create([
            'name' => 'บัตรทอง',
            'created_user_id' => 2,
            'rec_status' => 1,
        ]);
        Payment::create([
            'name' => 'ประกันสังคม',
            'created_user_id' => 2,
            'rec_status' => 1,
        ]);
        Payment::create([
            'name' => 'อปท',
            'created_user_id' => 2,
            'rec_status' => 1,
        ]);
        Payment::create([
            'name' => 'บุคคลากรมหาวิทยาลัยขอนแก่น',
            'created_user_id' => 2,
            'rec_status' => 1,
        ]);
        Payment::create([
            'name' => 'นักศึกษามหาวิทยาลัยขอนแก่น',
            'created_user_id' => 2,
            'rec_status' => 1,
        ]);
    }
}
