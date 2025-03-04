<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Footer;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        // Ambil semua kategori
        $categories = Category::all();

        $footer = Footer::first(); // Ambil satu data footer

        return view('pages.products', compact('products', 'categories', 'footer'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        // Cari produk berdasarkan slug
        $product = Product::where('slug', $slug)->firstOrFail();

        // Ambil semua gambar tambahan dari tabel product_images
        $productImages = $product->images; // Pastikan ada relasi di model

        $footer = Footer::first(); // Ambil data footer

        return view('pages.product-details', compact('product', 'productImages', 'footer'));
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
    public function update(Request $request, Product $product)
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
