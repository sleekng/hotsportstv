<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('Team/Index', compact('teams'));
    }

    public function create()
    {
        return view('Team.Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('teams', 'public') : null;

        Team::create([
            'name' => $request->name,
            'role' => $request->role,
            'image' => $imagePath,
        ]);

        return redirect()->route('team.index')->with('success', 'Team member created successfully.');
    }

    public function show(Team $team)
    {
        return view('teams.show', compact('team'));
    }

    public function edit(Team $team)
    {
        return view('Team.Edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($team->image);
            if ($team->image) {
            }
            $imagePath = $request->file('image')->store('teams', 'public');
        } else {
            $imagePath = $team->image;
        }

        $team->update([
            'name' => $request->name,
            'role' => $request->role,
            'image' => $imagePath,
        ]);

        return redirect()->route('team.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy(Team $team)
    {
        if ($team->image) {
            Storage::disk('public')->delete($team->image);
        }
        $team->delete();

        return redirect()->route('team.index')->with('success', 'Team member deleted successfully.');
    }
}
