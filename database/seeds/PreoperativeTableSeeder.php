<?php

use Illuminate\Database\Seeder;
use App\Preoperative;

class PreoperativeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Preoperative::create([
            'pre_opt' => 'CBC plt',
            'rec_status' => 1,
            'created_user_id' => 1.
        ]);
        Preoperative::create([
            'pre_opt' => 'PT PTT INR',
            'rec_status' => 1,
            'created_user_id' => 1.
        ]);
        Preoperative::create([
            'pre_opt' => 'Electrolyte',
            'rec_status' => 1,
            'created_user_id' => 1.
        ]);
        Preoperative::create([
            'pre_opt' => 'Ca PO4 Mg Alb',
            'rec_status' => 1,
            'created_user_id' => 1.
        ]);
        Preoperative::create([
            'pre_opt' => 'LFT',
            'rec_status' => 1,
            'created_user_id' => 1.
        ]);
        Preoperative::create([
            'pre_opt' => 'Anti HIV',
            'rec_status' => 1,
            'created_user_id' => 1.
        ]);
        Preoperative::create([
            'pre_opt' => 'CXR',
            'rec_status' => 1,
            'created_user_id' => 1.
        ]);
        Preoperative::create([
            'pre_opt' => 'EKG',
            'rec_status' => 1,
            'created_user_id' => 1.
        ]);
        Preoperative::create([
            'pre_opt' => 'Consult',
            'rec_status' => 1,
            'created_user_id' => 1.
        ]);
        Preoperative::create([
            'pre_opt' => 'ตรวจสอบสิทธิ์การรักษา',
            'rec_status' => 1,
            'created_user_id' => 1.
        ]);
    }
}
