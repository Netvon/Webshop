<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin', ['except' => [
            'index',
            'show',
        ]]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Category::with('children.children')->where('parent_id', null)->get();

        return view('category.index', [
            'categories' => $cats,
        ]);
    }

    public function show($id)
    {
        $category = Category::findBySlugOrIdOrFail($id);

        $products = $category->products()->get();

        return view('category.show', [
            'category' => $category,
            'products' => $products,
        ]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(CategoryRequest $request)
    {
        $input = $request->all();

        $category = Category::create($input);

        $category->parent()->associate(Category::find($input['parent']));
        $category->save();

        return redirect('categories');
    }

    public function update($id, CategoryRequest $request)
    {
        $category = Category::findBySlugOrIdOrFail($id);

        $category->update($request->all());

        return redirect('categories');
    }

    public function edit($id)
    {
        $category = Category::findBySlugOrIdOrFail($id);
        return view('category.edit', [
            'category' => $category,
        ]);
    }

    public function destroy($id)
    {
        $category = Category::findBySlugOrIdOrFail($id);
        $category->delete();

        return redirect('categories');
    }
}