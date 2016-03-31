<?php

namespace App\Http\Controllers\Manage;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Product;

use App\Http\Requests;
use App\ProductImage;
use App\Specification;
use App\Tag;
use Carbon\Carbon;
use Redirect;
use Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('manage.product.index');
    }

    public function create()
    {
        return view('manage.product.create', [
            'create_in_category' => null,
            'tags'               => Tag::pluck('name', 'id'),
        ]);
    }

    public function create_in_category(Category $create_in_category)
    {
        $tags = Tag::pluck('name', 'id');

        return view('manage.product.create', compact('create_in_category', 'tags'));
    }

    public function store(ProductRequest $request)
    {
        $input = $request->all();

        $product = Product::create($input);

        if (array_key_exists('tag_list', $input)) {
            $product->tags()->attach($input['tag_list']);
        }

//        dd($request->file('image'));

        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $basename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $filename = basename($basename, '.' . $extension);
                $name = md5($filename . Carbon::now()->toDateTimeString());
                $final_path = '/productimages/' . $name . '.' . $extension;
                $file->move(public_path() . '/productimages/', $name . '.' . $extension);

                $new_image = new ProductImage();
                $new_image->image_uri = $final_path;
                $new_image->annotation = 'test';
                $new_image->image_type = 'DETAIL';
                $product->images()->save($new_image);
            }
        }

        if (array_key_exists('spec', $input)) {
            foreach ($input['spec'] as $spec) {
                $new_spec = new Specification();
                $new_spec->name = $spec['name'];
                $new_spec->value = $spec['value'];
                $product->specifications()->save($new_spec);
            }
        }

        flash(trans('product.flash_created', ['name' => $product->name]), 'success');

        return redirect()->action('Manage\ProductController@index');
    }

    public function update(Product $product, ProductRequest $request)
    {
//        dd($request['spec'], $product->specifications->toArray());
//        dd($request->all());
        $product->update($request->all());

//        dd($request->input('tag_list'));

        if (array_key_exists('tag_list', $request->all())) {
            $product->tags()->sync($request->input('tag_list'));
        } else {
            $product->tags()->detach();
        }

//        dd($request['spec']);
        if (array_key_exists('spec', $request->all())) {
            foreach ($request['spec'] as $key => $spec) {
                $new_spec = Specification::firstOrNew(['id' => $key]);
                $new_spec->name = $spec['name'];
                $new_spec->value = $spec['value'];
                $product->specifications()->save($new_spec);
            }
        }

        $product->resluggify();
        $product->save();

        return Redirect::action('Manage\ProductController@index');
    }

    public function edit(Product $product)
    {
        return view('manage.product.edit', [
            'product'            => $product,
            'create_in_category' => $product->category,
            'tags'               => Tag::pluck('name', 'id'),
        ]);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->action('Manage\ManageController@index');
    }

    public function restore(Product $product)
    {
        $product->restore();

        return redirect()->action('Manage\ProductController@index');
    }
}
