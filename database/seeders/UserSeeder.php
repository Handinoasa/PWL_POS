<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        [
            'user_id' => 1,
            'level_id' => 1,
            'nama' => 'Admin',
            'username' => 'Administrator',
            'password' => Hash::make('12345'),
        ],
        [
            'user_id' => 2,
            'level_id' => 2,
            'nama' => 'Manager',
            'username' => 'Manager',
            'password' => Hash::make('12345'),
        ],
        [
            'user_id' => 3,
            'level_id' => 3,
            'nama' => 'Staff',
            'username' => 'Staff',
            'password' => Hash::make('12345'),
        ],
];
DB::table('m_user')->insert($data);
    }
}
