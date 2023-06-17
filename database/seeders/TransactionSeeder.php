<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::insert([
            'user_id' => 1,
            'product_id' => 2,
            'transaction_date' => '2022-03-18 13:40:00.00'
        ]);

        Transaction::insert([
            'user_id' => 1,
            'product_id' => 6,
            'transaction_date' => '2022-05-24 09:56:00.00'
        ]);

        Transaction::insert([
            'user_id' => 1,
            'product_id' => 3,
            'transaction_date' => '2022-01-04 19:22:00.00'
        ]);

        Transaction::insert([
            'user_id' => 1,
            'product_id' => 4,
            'transaction_date' => '2022-05-04 08:28:00.00'
        ]);

        Transaction::insert([
            'user_id' => 1,
            'product_id' => 1,
            'transaction_date' => '2022-11-07 09:44:00.00'
        ]);
    }
}
