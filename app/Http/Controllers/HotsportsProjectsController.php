<?php

namespace App\Http\Controllers;

use App\Models\HotsportsProjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HotsportsProjectsController extends Controller
{
    public function index()
    {
        $projects = HotsportsProjects::all();
        return view('HotsportsProjects/Index', compact('projects'));
    }

    public function create()
    {
        return view('HotsportsProjects.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('hprojects', 'public');
        }

        HotsportsProjects::create($data);

        return redirect()->route('hprojects.index')->with('success', 'Project created successfully.');
    }

    public function show(HotsportsProjects $project)
    {
        return view('HotsportsProjects.show', compact('project'));
    }

    public function edit($id)
    {

        $project = HotsportsProjects::findOrFail($id);
        return view('HotsportsProjects/Edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $project = HotsportsProjects::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::delete('public/' . $project->image);
            }
            $data['image'] = $request->file('image')->store('hprojects', 'public');
        }

        $project->update($data);

        return redirect()->route('hprojects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy($id)
    {
        $project = HotsportsProjects::findOrFail($id);
        
        if ($project->image) {
            Storage::delete('public/' . $project->image);
        }
        $project->delete();

        return redirect()->route('hprojects.index')->with('success', 'Project deleted successfully.');
    }
}
