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
        $nowDate = now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s');

        Transaction::insert([
            'user_id' => 1,
            'product_id' => 2,
            'transaction_date' => '2023-03-18 13:40:00.00',
            'created_at' => $nowDate
        ]);

        Transaction::insert([
            'user_id' => 1,
            'product_id' => 6,
            'transaction_date' => '2023-05-24 09:56:00.00',
            'created_at' => $nowDate
        ]);

        Transaction::insert([
            'user_id' => 1,
            'product_id' => 3,
            'transaction_date' => '2023-01-04 19:22:00.00',
            'created_at' => $nowDate
        ]);
    }
}
