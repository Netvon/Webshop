<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;

use App\Http\Requests;
use Redirect;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin', ['except' => [
            'show',
        ]]);
    }

    public function show($id)
    {
        $product = Product::findBySlugOrIdOrFail($id);

        return view('product.show', [
            'product' => $product,
        ]);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(ProductRequest $request)
    {
        $input = $request->all();

        Product::create($input);

        return redirect('/');
    }

    public function update($id, ProductRequest $request)
    {
        $product = Product::findBySlugOrIdOrFail($id);

        $product->update($request->all());

        return Redirect::action('ProductController@show', $product->slug);
    }

    public function edit($id)
    {
        $product = Product::findBySlugOrIdOrFail($id);
        return view('product.edit', [
            'product' => $product,
        ]);
    }

    public function destroy($id)
    {
        $product = Product::findBySlugOrIdOrFail($id);
        $product->delete();

        return redirect('/');
    }
}
