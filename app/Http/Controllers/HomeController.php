<?php

namespace App\Http\Controllers;

use App\Models\Article;
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

        // Ambil 3 kategori
        $categories = Category::take(3)->get();

        // ambil 3 artikel terbaru
        $articles = Article::latest()->take(3)->get();

        $footer = Footer::first(); // Ambil satu data footer

        return view('pages.home', compact('products', 'categories', 'footer', 'articles'));
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
