<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Fetch products and display them on the page
    public function index()
    {
        $products = Product::all(); // Retrieve all products from the database
        return view('/products', compact('products'));
    }
    public function show($id)
    {
        // Fetch the product by its ID or fail with a 404 error if not found
        $product = Product::findOrFail($id);

        // Pass the product data to the 'showProduct' view
        return view('showProduct', compact('product'));
    }
    public function purchase($id)
    {
        return redirect()->route('products')->with('success', 'Thank you for your purchase!');
    }
}
