<?php

namespace App\Http\Controllers;

use App\Models\PCompanyLogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PCompanyLogoController extends Controller
{
    public function index()
    {
        $pcompanies = PCompanyLogo::all();
        return view('plogos/index', compact('pcompanies'));
    }

    public function create()
    {
        return view('plogos/create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        // Check if images are present in the request
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {

                $imagePath = $image->store('pcompanies', 'public');
                // Save the logo data to the database

                PCompanyLogo::create([
                    'image' => $imagePath,
                ]);
            }
        }


        // Redirect back with a success message
        return redirect()->route('pcompanies.index')->with('success', 'Category created successfully.');
    }




    public function edit($id)
    {
        $company = PCompanyLogo::findOrFail($id);
        return view('plogos/edit', compact('company'));
    }

    public function update(Request $request, PCompanyLogo $company)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($company->image) {
                Storage::disk('public')->delete($company->image);
            }

            // Store new image
            $imagePath = $request->file('image')->store('pcompanies', 'public');
        } else {
            $imagePath = $company->image;
        }

        $company->update([
            'image' => $imagePath,
        ]);

        return redirect()->route('pcompanies.index')->with('success', 'Company updated successfully.');
    }

    public function destroy($id)
    {
        $company = PCompanyLogo::findOrFail($id);
        if ($company->image) {
            Storage::disk('public')->delete($company->image);
        }

        $company->delete();

        return redirect()->route('pcompanies.index')->with('success', 'Company deleted successfully.');
    }
}
