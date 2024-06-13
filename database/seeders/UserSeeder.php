<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create a new user
        /* $user = new \App\Models\User();
        $user->name = 'finie';
        $user->phone = '0821234567890';
        $user->email = 'finiecans@gmail.com';
        $user->password = bcrypt('admin000');
        $user->save(); */

        //Create multiple users
        $user = [
            [
                'name' => 'Shearalia',
                'phone' => '081328345678',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'User',
                'phone' => '081328345679',
                'email' => 'user@gmail.com',
                'password' => bcrypt('456'),
            ],
        ];

        //Insert the user into the database
        DB::table('users')->insert($user);

        //migration untuk struktur
        //seeder untuk menambahkan data
    }
}
