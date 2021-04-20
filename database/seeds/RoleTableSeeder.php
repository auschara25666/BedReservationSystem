<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role' => 'SuperAdmin'
        ]);
        Role::create([
            'role' => 'AdminWard'
        ]);
        Role::create([
            'role' => 'พยาบาลหัวหน้าเวร'
        ]);
        Role::create([
            'role' => 'อาจารย์แพทย์'
        ]);
        Role::create([
            'role' => 'แพทย์'
        ]);
        Role::create([
            'role' => 'พยาบาล'
        ]);
        Role::create([
            'role' => 'ผู้ช่วยพยาบาล'
        ]);

    }
}
