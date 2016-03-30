<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Tag;

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
        $categories = Category::with('children.children')->get();
        $product_count = Product::all()->count();
        $product_showcase = Product::all()->first();

        return view('arrow.home', compact('categories', 'product_count', 'product_showcase'));
    }

    /**
     * Show the about us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('arrow.about');
    }

    /**
     * Show the about us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('arrow.contact');
    }
}