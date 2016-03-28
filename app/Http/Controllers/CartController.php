<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

//        $request->session()->forget('cart.products');
//        $request->session()->push('cart.products', Product::all(['id', 'name'])->toArray());

//        dd(session());
//        \Session::push('cart.products', Product::all(['id', 'name'])->toArray());


//        dd(session('cart.products'));
        return view('cart.index', ['products' => session('cart.products')[0]]);
    }
}
