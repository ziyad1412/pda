<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Footer;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 3 produk terbaru
        $products = Product::latest()->take(3)->get();

        // Ambil semua kategori
        $categories = Category::all();

        $footer = Footer::first(); // Ambil satu data footer

        return view('pages.home', compact('products', 'categories', 'footer'));
    }

    public function about()
    {
        $footer = Footer::first(); // Ambil satu data footer

        return view('pages.about', compact('footer'));
    }

    //contact
    public function contact()
    {
        $footer = Footer::first(); // Ambil satu data footer

        return view('pages.contact', compact('footer'));
    }
}
