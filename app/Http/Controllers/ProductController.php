<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ProductRequest;
use App\Product;

use App\Http\Requests;
use App\Specification;
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
        $products = Product::with('filters', 'specifications', 'category')
            ->get();

        $product = null;

        foreach ($products as $p) {
            if ($p->id == $id || $p->slug == $id)
                $product = $p;
        }

        if (!$product) {
            abort(404);
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

        $create_in_category = Category::findBySlugOrIdOrFail($id);

        return view('product.create', ['create_in_category' => $create_in_category]);
    }

    public function store(ProductRequest $request)
    {
        $input = $request->all();

        $product = Product::create($input);

        foreach ($input['spec'] as $spec) {
            $new_spec = new Specification();
            $new_spec->name = $spec['name'];
            $new_spec->value = $spec['value'];
            $product->specifications()->save($new_spec);
        }

        flash(trans('product.flash_created', ['name' => $product->name]), 'success');

        return redirect('/');
    }

    public function update($id, ProductRequest $request)
    {
        $products = Product::with('specifications')
            ->get();

        $product = null;

        foreach ($products as $p) {
            if ($p->id == $id || $p->slug == $id)
                $product = $p;
        }

        if (!$product) {
            abort(404);
        }

        dd($request['spec'], $product->specifications()->toArray('name', 'value'));

        $product->update($request->all());

        return Redirect::action('ProductController@show', $product->slug);
    }

    public function edit($id)
    {
        $products = Product::with('filters', 'specifications', 'category')
            ->get();

        $product = null;

        foreach ($products as $p) {
            if ($p->id == $id || $p->slug == $id)
                $product = $p;
        }

        if (!$product) {
            abort(404);
        }

        return view('product.edit', [
            'product'            => $product,
            'create_in_category' => $product->category,
        ]);
    }

    public function destroy($id)
    {
        $product = Product::findBySlugOrIdOrFail($id);
        $product->delete();

        return redirect('/');
    }
}
