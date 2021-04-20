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
            'ward_id' => 1,
            'created_user_id' => 2,
            'rec_status' => 1,
        ]);
        Payment::create([
            'name' => 'จ่ายตรง',
            'ward_id' => 1,
            'created_user_id' => 2,
            'rec_status' => 1,
        ]);
        Payment::create([
            'name' => 'รัฐวิสาหกิจ',
            'ward_id' => 1,
            'created_user_id' => 2,
            'rec_status' => 1,
        ]);
        Payment::create([
            'name' => 'บัตรทอง',
            'ward_id' => 1,
            'created_user_id' => 2,
            'rec_status' => 1,
        ]);
        Payment::create([
            'name' => 'ประกันสังคม',
            'ward_id' => 1,
            'created_user_id' => 2,
            'rec_status' => 1,
        ]);
        Payment::create([
            'name' => 'อปท',
            'ward_id' => 1,
            'created_user_id' => 2,
            'rec_status' => 1,
        ]);
        Payment::create([
            'name' => 'บุคคลากรมหาวิทยาลัยขอนแก่น',
            'ward_id' => 1,
            'created_user_id' => 2,
            'rec_status' => 1,
        ]);
        Payment::create([
            'name' => 'นักศึกษามหาวิทยาลัยขอนแก่น',
            'ward_id' => 1,
            'created_user_id' => 2,
            'rec_status' => 1,
        ]);
    }
}
