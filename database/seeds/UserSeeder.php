<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Sĩ Hiệp',
            'username' => 'sihiep',
            'password' => Hash::make('123456789'),
            'birth' => '2001-09-05',
            'phone' => '0123456789',
            'email' => 'hiepdv59@gmail.com',
            'images' => 'images/avatar-default.png',
            'address' => 'Đại Học Công Nghiệp'
        ]);
    }
}
