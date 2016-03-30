<?php

namespace App\Http\Controllers;

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
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Product $product)
    {
        $products = Product::all()->where('category_id', $product->category_id)->take(3);
        $specifications = $product->specifications()->getResults();
        
        return view('product.show', compact('product', 'products', 'specifications'));
    }

    public function search(Request $request)
    {
        $products = Product::all();
        $search_products = new \Illuminate\Database\Eloquent\Collection();

        foreach ($products as $p)
        {
            if (str_contains(strtolower($p->name), strtolower($request->body)))
            {
                $search_products->add($p);
            }
        }

        return view('category.search', compact('search_products', 'request'));

//        return $request->all();
    }
}