<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
   
    public function index(Request $request)
    {
        $status = $request->query('status', 'all');
    
        $posts = BlogPost::query();
    
        if ($status !== 'all') {
            $posts->where('status', $status);
        }
    
        $posts = $posts->get();
    
        return view('Blog/Index', [
            'posts' => $posts,
            'allCount' => BlogPost::count(),
            'publishedCount' => BlogPost::where('status', 'published')->count(),
            'draftCount' => BlogPost::where('status', 'draft')->count(),
            'trashCount' => BlogPost::where('status', 'trash')->count(),
        ]);

        
    }



    public function create()
    {
        $categories = Category::all();
        return view('Blog/Create',compact('categories'));
    }


    public function show(BlogPost $post)
    {
         // Fetch similar posts by category
         $similarPosts = BlogPost::where('category', $post->category)
         ->where('id', '!=', $post->id) // Exclude the current post
         ->take(3) // Limit to 3 similar posts
         ->get();
        return view('BlogShow',compact(['post','similarPosts']));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'image' => 'nullable|image',
            'category' => 'required',
            'content' => 'required',
            'keywords' => 'nullable',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }

        BlogPost::create($data);

        return redirect()->route('blog-list')->with('success', 'Blog post created successfully');
    }

    public function edit($id)
    {
        $post = BlogPost::findOrFail($id);
        $categories = Category::all();
        return view('Blog/Edit', compact(['post','categories']));
    }

    public function update(Request $request, $id)
    {
        $post = BlogPost::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'image' => 'nullable|image',
            'category' => 'required',
            'content' => 'required',
            'keywords' => 'nullable',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('images', 'public');
        }
        $post->update($data);

        return redirect()->route('blog-list')->with('success', 'Blog post updated successfully');
    }

    public function destroy($id)
    {
        $post = BlogPost::findOrFail($id);
        $post->delete();

        return redirect()->route('blog-list')->with('success', 'Blog post deleted successfully');
    }
}
