<?php

namespace App\Http\Controllers;

use App\Category;
use Request;

use App\Http\Requests;

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

    public function store()
    {
        $this->middleware('role:admin');

        $input = Request::all();

        $category = Category::create($input);

        return redirect('categories');
    }

    public function update()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
