<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
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
            $product = Product::where('id', $transactionValue->coffee_id)->get();

            // ubah format harganya
            $product[0]['ind_price'] = 'Rp'.number_format($product[0]['price'], 2, ",", ".");

            // simpan data coffee di transaction
            $transactionValue->coffee_name = $product[0]['coffee_name'];
            $transactionValue->ind_price = $product[0]['ind_price'];
            $transactionValue->image_source = $product[0]['image_source'];

            // ubah format date transaction_date
            $transactionValue->transaction_date_formatted = date('d F Y', strtotime
            ($transactionValue->transaction_date));
            $transactionValue->transaction_time = date('H:i', strtotime($transactionValue->transaction_date));
        }

        return $transactions;
    }

    public function buyProduct(Request $request) {
        try {
            Transaction::insert([
                'user_id' => $request->user_id,
                'product_id' => $request->product_id,
                'transaction_date' => $request->transaction_date
            ]);

            DB::commit();
            return redirect()->back();
        }
        catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
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
