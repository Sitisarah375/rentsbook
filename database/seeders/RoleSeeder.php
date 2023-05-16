<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;   
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Schema::disableForeignKeyConstraints();
        // Role::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     'admin', 'client'
        // ];

        // foreach($data as $value)
        // {
        //     Role::insert([
        //         'name' => $value
        //     ]);
        // }

        DB::table('users')->insert([
            [
            'name' => 'Haechan',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'no_hp' => '0987654321',
            'address' => 'bandung',
            'role_id' => 1
            ],

            [
            'name' => 'Sarahe',
            'email' => 'sarah@gmail.com',
            'password' => Hash::make('12345678'),
            'no_hp' => '0987654321',
            'address' => 'bogor',
            'role_id' => 1
            ]

        ]);
    }
}
