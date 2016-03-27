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

    /**
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function create()
    {
        return view('product.create', ['create_in_category' => null]);
    }

    public function create_in_category(Category $create_in_category)
    {
        return view('product.create', compact('create_in_category'));
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

    public function update(Product $product, ProductRequest $request)
    {
        dd($request['spec'], $product->specifications()->toArray('name', 'value'));

        $product->update($request->all());

        return Redirect::action('ProductController@show', $product->slug);
    }

    public function edit(Product $product)
    {
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
