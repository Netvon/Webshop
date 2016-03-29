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
use Request;

class ProductController extends Controller
{
    /**
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Product $product)
    {
        $nav_link = 'shop';
        $breadcrumbs = ['/arrow/shop' => 'shop', '0' => $product->name];

        $categories = Category::with('children.children')->get();
        $products = Product::all()->where('category_id', $product->category_id)->take(3);
        $tags = Tag::all();
        
        return view('arrow.product.show', compact('product', 'nav_link', 'breadcrumbs', 'categories', 'products', 'tags'));
    }
}