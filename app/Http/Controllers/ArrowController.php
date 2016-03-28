<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ArrowController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nav_link = '/arrow';

        $categories = Category::with('children.children')->get();
        $product_count = Product::all()->count();
        $product_showcase = Product::all()->first();

        return view('arrow.home', compact('nav_link', 'categories', 'product_count', 'product_showcase'));
    }

    /**
     * Show the application webshop.
     *
     * @return \Illuminate\Http\Response
     */
    public function shop()
    {
        $nav_link = '/shop';
        
        $categories = Category::with('children.children')->get();

        return view('arrow.shop', compact('nav_link', 'categories'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('arrow.about');
    }
}