<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagRequest;
use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('manage.tag.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TagRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        $tag = Tag::create($request->all());

        flash(trans('tag.flash_created', ['name' => $tag->name]), 'success');

        return redirect()->action('Manage\TagController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param Tag $tag
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show(Tag $tag)
    {
        return $tag;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tag $tag
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Tag $tag)
    {
        return view('manage.tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TagRequest|Request $request
     * @param Tag $tag
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(TagRequest $request, Tag $tag)
    {
        if($tag->update($request->all())) {
            $tag->resluggify();
            $tag->save();
        }

        return redirect()->action('Manage\TagController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tag $tag
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->action('Manage\TagController@index');
    }

    public function restore(Tag $tag)
    {
        $tag->restore();

        return redirect()->action('Manage\TagController@index');
    }
}
