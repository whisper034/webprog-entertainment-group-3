<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function transactions($user_id) {
//        $user = User::find(Session::get('loginUser')->user_id);

        // sort by transaction_date dari yang terbaru ke terlama
        $transactions = Transaction::where('user_id', $user_id)->get()->sortByDesc('transaction_date');

        foreach ($transactions as $transactionKey => $transactionValue) {
            // cari coffee yang dibeli
            $product = Product::where('product_id', $transactionValue->product_id)->get();

            // ubah format harganya
            $product[0]['ind_price'] = 'Rp'.number_format($product[0]['product_price'], 2, ",", ".");

            // simpan data produk di transaction
            $transactionValue->product_name = $product[0]['product_name'];
            $transactionValue->ind_price = $product[0]['ind_price'];
            $transactionValue->product_photo_url = $product[0]['product_photo_url'];

            // ubah format date transaction_date
            $transactionValue->transaction_date_formatted = date('d F Y', strtotime
            ($transactionValue->transaction_date));
            $transactionValue->transaction_time = date('H:i', strtotime($transactionValue->transaction_date));
        }

        return $transactions;
    }

    // belum ada handler dan transaction query (BEGIN, COMMIT, ROLLBACK)
    public function buyProduct(Request $request) {
        $nowDate = now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s');

        Transaction::insert([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'transaction_date' => $nowDate
        ]);

        return redirect('/transaction/success');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
