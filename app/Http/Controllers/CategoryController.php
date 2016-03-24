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
        return view('category.index', [
            'categories' => Category::roots()->get(),
        ]);
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);

        return view('category.show', [
            'category' => $category,
            'products' => $category->products()->get(),
        ]);
    }

    public function create()
    {
        $this->middleware('role:admin');

        return view('category.create');
    }

    public function store(CategoryRequest $request)
    {
        $this->middleware('role:admin');

        $input = $request->all();

        Category::create($input);

        return redirect('categories');
    }

    public function update($id, CategoryRequest $request)
    {
        $category = Category::findOrFail($id);

        $category->update($request->all());

        return redirect('categories');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', [
            'category' => $category,
        ]);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('categories');
    }
}