<?php

use Illuminate\Database\Seeder;
use App\Bed;

class BedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        for ($i = 1; $i < 32; $i++) { 
            Bed::create([
                'bed_number' => $i,
                'bed_status' => 'ว่าง',
                'ward_id' => 1,
                'created_user_id' => 2
            ]);
        }

    }
}
