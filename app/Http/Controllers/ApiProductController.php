<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiProductController extends Controller
{
    public function index(){
        
        $product = Product::get();
        return response()->json([
            'success' => true,
            'message' => 'Daftar data produk',
            'data' => $product
        ], 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);

        Product::create($validatedData);

        return response()->json([
            'success' => true,
            'message' => 'product Berhasil Disimpan!',
            'data' => $product
        ], 200);
    }

    public function delete(Product $product)
    {
        Product::destroy ($product->id);
        return response()->json([
            'success' => true,
            'message' => 'product Berhasil Dihapus!',
            'data' => $product
        ], 200);
    }
}
