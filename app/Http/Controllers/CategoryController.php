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
        return view('category.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }
}