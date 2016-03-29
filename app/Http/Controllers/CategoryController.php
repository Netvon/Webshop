<?php
/**
 * Created by PhpStorm.
 * User: Tom en Sander
 * Date: 29-03-16
 * Time: 12:30
 */

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Tag;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Show the application webshop.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nav_link = 'shop';

        $categories = Category::with('children.children')->get();
        $categories_filter = Product::query()->setQuery("SELECT *, COUNT(p.category_id) as sum_products FROM categories c LEFT JOIN products p ON c.id = p.category_id GROUP BY c.id");
        $products = Product::all();
        $tags = Tag::all();

        return view('arrow.category.index', compact('nav_link', 'categories', 'categories_filter', 'products', 'tags'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function show(Category $category)
    {
        $nav_link = 'categories';
        $breadcrumbs = ['/arrow/shop' => 'shop', '0' => $category->name];

        $categories = Category::with('children.children')->get();
        $products = $category->products()->get();
        $tags = Tag::all();

        return view('arrow.category.show', compact('nav_link', 'breadcrumbs', 'categories', 'category', 'products', 'tags'));
    }
}