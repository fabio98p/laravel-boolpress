<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('admin.tags.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $data = $request->all();
        
        $tag = new Tag();
        $tag->fill($data);
        
        
        $tag->slug = $this->generateSlug($tag->name);
        $tag->save();

        return redirect(route('admin.tags.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        return view('admin.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $data = $request->all();

        if ($tag->title != $data['name']) {
            $data['slug'] = $this->generateSlug($data['name']);
        }

        $tag->update($data);

        return redirect(route('admin.tags.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect(route('admin.tags.index'));
    }

        private function generateSlug(string $title) {
        $slug = Str::slug($title, '-');
        $slug_base = $slug;
        $contatore = 1;
    
        $tag_with_slug = tag::where('slug', '=', $slug)->first();
        while ($tag_with_slug) {
            $slug = $slug_base . '-' . $contatore;
            $contatore++;
    
            $tag_with_slug = tag::where('slug', '=', $slug)->first();
        }
        return $slug;
    }
}
