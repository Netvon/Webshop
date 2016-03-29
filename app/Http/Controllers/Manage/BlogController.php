<?php

namespace App\Http\Controllers\Manage;

use App\Blog;
use App\Http\Requests\BlogRequest;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Routing\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param BlogRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $blog = Blog::create($request->all());

        auth()->user()->blogs()->save($blog);

        $blog->save();

        return redirect()->action('Manage\ManageController@index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Blog $blog
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Blog $blog)
    {
        return view('manage.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Blog $blog
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request, Blog $blog)
    {
        return redirect()->action('Manage\ManageController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Blog $blog
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->action('Manage\ManageController@index');
    }
}
