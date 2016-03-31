<?php

namespace App\Http\Controllers;

use App\ShippingListing;
use Illuminate\Http\Request;

use App\Http\Requests;

class OrderController extends Controller
{
    public function index()
    {
        $order = auth()->user()->orders()->with('products')->get()->last();
        $shipping_listing = ShippingListing::where('user_id', 2)->get();

        return $shipping_listing;

//        return view('checkout.checkout_1', compact('order'));
    }

    public function delivery()
    {
        return 'test';
    }
}
