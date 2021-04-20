<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'permission' => 'SuperAdmin',
        ]);
        Permission::create([
            'permission' => 'Admin',
        ]);
        Permission::create([
            'permission' => 'ChiefNurse',
        ]);
        Permission::create([
            'permission' => 'Nurse(Ward)',
        ]);
        Permission::create([
            'permission' => 'User',
        ]);
    }
}
