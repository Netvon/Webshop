<?php

namespace App\Http\Controllers;

use App\Cart;
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

    public function index()
    {
        $cart = new Cart();
//        $cart->push_product(1, 10);
        return view('cart.index', ['cart' => $cart->products()]);
    }

    public function destroy(Request $request)
    {
        $product_id = $request->input('product_id');

        $cart = new Cart();
        $cart->pull_product($product_id);

        return redirect()->back();
    }

    public function store(Request $request)
    {
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');

        $cart = new Cart();
        $cart->push_product($product_id, $quantity);

        return redirect()->back();
    }

    public function order()
    {
        $cart = new Cart();
        $order = $cart->make_order();

        return redirect()->action('OrderController@index');
    }
}
