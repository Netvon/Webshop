<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ProductRequest;
use App\Product;

use App\Http\Requests;
use Redirect;
use Request;

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
        $products = Product::with('filters', 'specifications')
                    ->get();

        $product = null;

        foreach($products as $p)
        {
            if($p->id == $id || $p->slug == $id)
                $product = $p;
        }

        return view('product.show', [
            'product' => $product,
        ]);
    }

    public function create()
    {
        return view('product.create', ['create_in_category' => null]);
    }

    public function create_in_category($id)
    {
        $create_in_category =  Category::findBySlugOrIdOrFail($id);

        return view('product.create', ['create_in_category' => $create_in_category]);
    }

    public function store(ProductRequest $request)
    {
        $input = $request->all();

        $product = Product::create($input);

        flash(trans('product.flash_created', ['name' => $product->name]), 'success');

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
