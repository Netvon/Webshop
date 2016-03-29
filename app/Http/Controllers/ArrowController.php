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
        $nav_link = 'arrow';

        $categories = Category::with('children.children')->get();
        $product_count = Product::all()->count();
        $product_showcase = Product::all()->first();

        return view('arrow.home', compact('nav_link', 'categories', 'product_count', 'product_showcase'));
    }

    /**
     * Show the about us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $nav_link = 'about';
        $breadcrumbs = ['0' => 'about us'];

        $categories = Category::with('children.children')->get();
        
        return view('arrow.about', compact('nav_link', 'breadcrumbs', 'categories'));
    }

    /**
     * Show the about us page.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $nav_link = 'contact';
        $breadcrumbs = ['0' => 'contact'];

        $categories = Category::with('children.children')->get();

        return view('arrow.contact', compact('nav_link', 'breadcrumbs', 'categories'));
    }
}