<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nowDate = now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s');

        // user_id = 1
        User::insert([
            'user_photo_url' => '/images/user/1.png',
            'name' => 'Ariel Sefrian',
            'phone_number' => '081344567980',
            'gender' => 'M',
            'email' => 'ariel.sefrian@binus.ac.id',
            'password' => Hash::make('1234567890'),
            'created_at' => $nowDate
        ]);
    }
}
