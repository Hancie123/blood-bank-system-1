<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $admindata = [
            'name' => 'Admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('Password'),
            'email_verified_at' => Carbon::now(),
            'role' => 'admin',

        ];
        User::firstOrCreate(['email' => $admindata['email']], $admindata);
    }
}