<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fname' => 'Super',
            'lname' => 'Admin',
            'email' => 'superadmin@admin.com',
            'password' => Hash::make('adminadmin'),
            'phone' => '0111111111',
            'rec_status' => '1',
            'role_id' => '1',
            'permission_id' => '1',
        ]);
        User::create([
            'fname' => 'Admin',
            'lname' => 'Ward3J',
            'email' => 'adminward3j@admin.com',
            'password' => Hash::make('admin12345'),
            'phone' => '0111111111',
            'rec_status' => '1',
            'role_id' => '2',
            'permission_id' => '2',
            'ward_id' => '1',
        ]);
    }
}
