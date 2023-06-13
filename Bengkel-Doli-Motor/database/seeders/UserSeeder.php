<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'username' => 'admin',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
        ]);
        $admin->assignRole('admin');

        $staff = User::create([
            'username' => 'staff',
            'name' => 'staff',
            'email' => 'staff@gmail.com',
            'password' => bcrypt('123'),
        ]);
        $staff->assignRole('staff');

        $customer = User::create([
            'username' => 'yosafat',
            'name' => 'Yosafat Tambun',
            'email' => 'yosafat@gmail.com',
            'password' => Hash::make('123'),
        ]);
        $customer->assignRole('customer');
    }
}
