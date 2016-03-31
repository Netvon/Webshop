<?php

namespace App\Http\Controllers;

use App\ShippingListing;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class OrderController extends Controller
{
    public function index()
    {
        $order = auth()->user()->orders()->with('products')->get()->last();
        $shipping_listing = ShippingListing::where('user_id', auth()->user()->id)->get();

        return view('checkout.address', compact('order', 'shipping_listing'));
    }

    public function review_new_customer(Request $request)
    {
        $s = new ShippingListing();
        $s->user_id = $request->user_id;
        $s->name = $request->name;
        $s->street = $request->street;
        $s->city = $request->city;
        $s->country = $request->country;
        $s->postal_code = $request->zip;

        $s->save();

        $order = auth()->user()->orders()->with('products')->get()->last();

        return view('checkout.review', compact('order'));
    }

    public function review_known_customer()
    {
        $order = auth()->user()->orders()->with('products')->get()->last();

        return view('checkout.review', compact('order'));
    }

    public function success()
    {
        return view('checkout.succes');
    }
}
