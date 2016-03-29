<?php

namespace App\Http\Controllers\Manage;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Category::with('children.children')->withTrashed()->where('parent_id', null)->get();

        return view('manage.category.index', [
            'categories' => $cats,
        ]);
    }

    public function show(Category $category)
    {
        $products = $category->products()->get();

        return view('manage.category.show', [
            'category' => $category,
            'products' => $products,
        ]);
    }

    public function create()
    {
        return view('manage.category.create', ['create_in_category' => null]);
    }

    public function create_in_category(Category $create_in_category)
    {
        return view('manage.category.create', compact('create_in_category'));
    }

    public function store(CategoryRequest $request)
    {
        $input = $request->all();

        $category = Category::create($input);

        $category->parent()->associate(Category::find($input['parent']));
        $category->save();

        return redirect()->action('Manage\CategoryController@index');
    }

    public function update(Category $category, CategoryRequest $request)
    {
        $category->update($request->all());

        return redirect()->action('Manage\CategoryController@index');
    }

    public function edit(Category $category)
    {
        return view('manage.category.edit', compact('category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->action('Manage\CategoryController@index');
    }

    public function restore(Category $category)
    {
        $category->restore();

        return redirect()->action('Manage\CategoryController@index');
    }
}