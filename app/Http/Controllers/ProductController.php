<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    private ?string $searchParam = null;

    /**
     * Display a listing of the resource.
     */
    private function formatPriceInd($products)
    {
        foreach ($products as $productKey => $productValue) {
            // ubah format harganya
            $productValue->ind_price = 'Rp'.number_format($productValue->product_price, 0, ",", ".");
        }

        return $products;
    }

    public function viewShop(Request $request) {
        // kalau ada filter
//        if (!empty($filter->filter_by)) {
//            $productItems = DB::table('products')
//                ->join('product_categories', static function (JoinClause $c) {
//                    $c->on('products.product_category_id', '=', 'product_categories.product_category_id');
//                    $c->whereNull('products.deleted_at');
//                    $c->whereNull('product_categories.deleted_at');
//                })
//                ->where('products.product_category_id', '=', $filter->filter_by)
//                ->orderBy('products.product_id')
//                ->paginate(3);
//        }

        if (!empty($request->all()['search_by'])) {
            $this->searchParam = $request->all()['search_by'];
        }

        // kalau ada search
        $productItems = DB::table('products')
            ->join('product_categories', static function (JoinClause $c) {
                $c->on('products.product_category_id', '=', 'product_categories.product_category_id');
                $c->whereNull('products.deleted_at');
                $c->whereNull('product_categories.deleted_at');
            })
            ->where(function ($query) use ($request) {
                if (($search = $this->searchParam)) {
                    $query
                        ->orWhere('product_name', 'LIKE', '%' . $search . '%')
                        ->orWhere('product_description', 'LIKE', '%' . $search . '%')
                        ->orWhere('product_category_name', 'LIKE', '%' . $search . '%');
                    }
                }
            )
            ->orderBy('products.product_id')
            ->paginate(3);

        // ubah format harganya
        $productItems = $this->formatPriceInd($productItems);

        return view('/main/home', [
            'active' => "shop",
            'productItems' => ($productItems ?? null),
            'searchBy' => ($request->all()['search_by'] ?? null),
        ]);
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
