<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionTable::class,
            RoleTableSeeder::class,
            PrefixTableSeeder::class,
            WardTableSedder::class,
            UserTableSeeder::class,
            BedTableSeeder::class,
            DepartmentTableSeeder::class,
            PaymentTableSeeder::class,
            DoctorTableSeeder::class,
            OperativeTableSeeder::class,
            PreoperativeTableSeeder::class,
        ]);
    }
}
