<?php

namespace App\Http\Controllers;

use App\Models\InstagramPost;
use Illuminate\Http\Request;

class InstagramPostController extends Controller
{
    public function index()
    {
        $instagramPosts = InstagramPost::all();
        return view('instagram-posts.index', compact('instagramPosts'));
    }

    public function create()
    {
        return view('instagram-posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|url'
        ]);

        InstagramPost::create($request->all());
        return redirect()->route('instagram-posts.index');
    }

    public function show(InstagramPost $instagramPost)
    {
        return view('instagram-posts.show', compact('instagramPost'));
    }

    public function edit(InstagramPost $instagramPost)
    {
        return view('instagram-posts.edit', compact('instagramPost'));
    }

    public function update(Request $request, InstagramPost $instagramPost)
    {
        $request->validate([
            'url' => 'required|url'
        ]);

        $instagramPost->update($request->all());
        return redirect()->route('instagram-posts.index');
    }

    public function destroy(InstagramPost $instagramPost)
    {
        $instagramPost->delete();
        return redirect()->route('instagram-posts.index');
    }
}
