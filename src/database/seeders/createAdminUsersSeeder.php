<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class createAdminUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'name' => 'Super Admin DF',
                'email' => 'adminsuper@gmail.com',
                'password' => bcrypt('admin123'),
                'is_active' => true,
                'roles' => json_encode(['1'])
            ],
            [
                'name' => 'Admin DF',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'is_active' => true,
                'roles' => json_encode(['2'])
            ],
        ];
        DB::table('admins')->insert($admins);
    }
}
