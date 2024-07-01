<?php

namespace App\Http\Controllers;

use App\Models\CompanyLogo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyLogoController extends Controller
{
    public function index()
    {
        $companies = CompanyLogo::all();
        return view('logos/index', compact('companies'));
    }

    public function create()
    {
        return view('logos/create');
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

                $imagePath = $image->store('companies', 'public');
                // Save the logo data to the database

                CompanyLogo::create([
                    'image' => $imagePath,
                ]);
            }
        }


        // Redirect back with a success message
        return redirect()->route('companies.index')->with('success', 'Category created successfully.');
    }




    public function edit(CompanyLogo $company)
    {
        return view('logos/edit', compact('company'));
    }

    public function update(Request $request, CompanyLogo $company)
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
            $imagePath = $request->file('image')->store('companies', 'public');
        } else {
            $imagePath = $company->image;
        }

        $company->update([
            'image' => $imagePath,
        ]);

        return redirect()->route('companies.index')->with('success', 'Company updated successfully.');
    }

    public function destroy(CompanyLogo $company)
    {
        if ($company->image) {
            Storage::disk('public')->delete($company->image);
        }

        $company->delete();

        return redirect()->route('companies.index')->with('success', 'Company deleted successfully.');
    }
}
