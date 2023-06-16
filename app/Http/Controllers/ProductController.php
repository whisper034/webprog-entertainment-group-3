<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private function formatPriceInd($products): void
    {
        foreach ($products as $productKey => $productValue) {
            // ubah format harganya
            $productValue['ind_price'] = 'Rp'.number_format($productValue['price'], 2, ",", ".");
        }
    }

    // ini masih harus dilengkapin dan ditest
    public function viewShop($filter) {
        $productItems = DB::table('products')
            ->join('product_categories', static function (JoinClause $c) {
                $c->on('products.product_category_id', '=', 'product_categories.product_category_id');
                $c->whereNull('products.deleted_at');
                $c->whereNull('product_categories.deleted_at');
            })
            ->orderBy('products.product_id')->get();

        // kalau ada filter
        if (!empty($filter->filter_by)) {
            $productItems->where('products.product_category_id', '=', $filter->filter_by);
        }

        // kalau ada search
        if (!empty($filter->search_by)) {
            $productItems->whereRaw("product_name LIKE '%".$filter->search_by."%' OR product_description LIKE '%"
                .$filter->search_by."%'");
        }

        // ubah format harganya
        $this->formatPriceInd($productItems);

        return view('/main/home', [
            'active' => "shop",
            'productItems' => $productItems,
            'filterBy' => $filter->filter_by,
            'searchBy' => $filter->search_by,
        ]);
    }

    public function viewShopFiltered(Request $request) {
        return $this->viewShop($request->all());
    }
//
//    public function search(Request $request) {
//        return $this->viewShop(null, $request->all());
//    }

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
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
