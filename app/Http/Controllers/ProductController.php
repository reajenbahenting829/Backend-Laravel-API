<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return response()->json([
            'products' => Product::orderBy('name')->get()
        ]);
    }

    public function update(Product $product , Request $request) {
        $product ->update($request->all());
        return response()->json($product );
    }

    public function destroy(Product  $product ) {
        $product ->delete();
        return response()->json(['message'=>'Product  has been deleted.']);
    }

    public function store(Request $request) {
        $request->validate([
            'brand' => 'string|required',
            'name' => 'string|required',
            'supplier' => 'string|required',
            'category' => 'string|required',
            'price' => 'numeric|required',
            'quantity' => 'numeric|required',
            'units' => 'string|required',
        ]);

        $product = Product::create($request->all());
        return response()->json($product);
    }
 
}
