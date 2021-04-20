<?php

use Illuminate\Database\Seeder;
use App\Prefix;

class PrefixTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prefix::create([
            'prefix' => 'นาย'
        ]);
        Prefix::create([
            'prefix' => 'นาง'
        ]);
        Prefix::create([
            'prefix' => 'นางสาว'
        ]);
        Prefix::create([
            'prefix' => 'เด็กชาย'
        ]);
        Prefix::create([
            'prefix' => 'เด็กหญิง'
        ]);
        Prefix::create([
            'prefix' => 'ดร.'
        ]);
        Prefix::create([
            'prefix' => 'ศ.ดร.'
        ]);
        Prefix::create([
            'prefix' => 'ผศ.ดร.'
        ]);
        Prefix::create([
            'prefix' => 'ผศ.'
        ]);
        Prefix::create([
            'prefix' => 'รศ.ดร.'
        ]);
        Prefix::create([
            'prefix' => 'รศ.'
        ]);
        Prefix::create([
            'prefix' => 'อ.'
        ]);
        Prefix::create([
            'prefix' => 'นพ.'
        ]);
        Prefix::create([
            'prefix' => 'พญ.'
        ]);
        Prefix::create([
            'prefix' => 'นสพ.'
        ]);
        Prefix::create([
            'prefix' => 'สพญ.'
        ]);
        Prefix::create([
            'prefix' => 'ทพ.'
        ]);
        Prefix::create([
            'prefix' => 'ทพญ.'
        ]);
        Prefix::create([
            'prefix' => 'ภก.'
        ]);
        Prefix::create([
            'prefix' => 'ภกญ.'
        ]);
    }
}
