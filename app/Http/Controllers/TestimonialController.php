<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required|string',
            'content' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
        ]);

        $testimonial = new Testimonial();
        $testimonial->author = $request->author;
        $testimonial->content = $request->content;

        // Handle author image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image') ? $request->file('image')->store('testimonials', 'public') : null;
            $testimonial->image = $imagePath;
        }

        $testimonial->save();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('testimonials.edit', compact('testimonial'));
    }



    public function update(Request $request,  Testimonial $testimonial)
    {

   

        $request->validate([
            'author' => 'required|string',
            'content' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
        ]);




if ($request->hasFile('image')) {
    // Delete old image if exists
            if ($testimonial->image) {
                Storage::disk('public')->delete($testimonial->image);
            }

            // Store new image
            $imagePath = $request->file('image')->store('testimonials', 'public');
        } else {

            $imagePath = $testimonial->image;
   
        }

        $testimonial->update([
            'author' => $request->author,
            'content' => $request->content,
            'image' => $imagePath,
        ]);

        $testimonial->save();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully.');

    }

    public function destroy(Testimonial $testimonial)
    {
        // Delete associated image if exists
        if ($testimonial->author_image) {
            Storage::delete('public/testimonial_images/' . $testimonial->author_image);
        }

        $testimonial->delete();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
