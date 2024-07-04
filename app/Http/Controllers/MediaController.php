<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index()
    {


        $media = Media::all();  
        
        $HomePage =Media::where('page','Homepage')->get();
        $HotSports =Media::where('page','HotSports')->get();
        $HSStudios =Media::where('page','HS-Studios')->get();
        $OurCompanies =Media::where('page','Our Companies')->get();
        $Primedia =Media::where('page','Primedia')->get();
        $Studios =Media::where('page','Studios')->get();
        $TeamPage =Media::where('page','Team-Page')->get();

        return view('media.index', compact(['media','HomePage','HotSports','HSStudios','OurCompanies','Primedia','Studios','TeamPage']));

    }

    public function create()
    {
        return view('media.create');
    }

    public function store(Request $request)
    {
        
        
        // Validate the request
        $request->validate([
            'page'=>'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        // Check if images are present in the request
     // Check if images are present in the request
if ($request->hasFile('images')) {
    foreach ($request->file('images') as $image) {
        // Get the original file name
        $originalFileName = $image->getClientOriginalName();

        if($request->category == null){
       // Create a path with the original file name
       $imagePath = $image->storePubliclyAs('media/'.$request->page, $originalFileName, 'public');
        }else{
            
                    // Create a path with the original file name
                    $imagePath = $image->storePubliclyAs('media/'.$request->page.'/' . $request->category, $originalFileName, 'public');

        }

        // Generate a slug
        $slug = Str::slug($request->category) . now()->format('Y-m-d_H-i-s');

        // Save the image data to the database
        Media::create([
            'page' => $request->page,
            'type' =>  $originalFileName,
            'category' => $request->category,
            'image' => $imagePath,
        ]);
    }
}


        return redirect()->route('media.index')->with('success', 'Media uploaded successfully.');
    }

    public function show(Media $media)
    {
        return view('media.show', compact('media'));
    }

    public function edit($id )
    {
        $media = Media::findOrFail($id);
        return view('media.edit', compact('media'));
    }

    public function update(Request $request, $id)
    {


            $media = Media::findOrFail($id);

            $request->validate([
                'page'=>'required',
                'category'=>'required', 
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
             // Update the fields with new values
    $media->page = $request->page;
    $media->category = $request->category;

    // Check if a new file is uploaded
    if ($request->hasFile('image')) {
        // Get the new file
        $image = $request->file('image');
          // Delete the old file if it exists
          Storage::disk('public')->delete($media->image);

        if($request->category == null){
           // Store the new file with original name
           $imagePath = $image->storePubliclyAs('media/'.$request->page,$media->type, 'public');
             }else{

            // Store the new file with original name
            $imagePath = $image->storePubliclyAs('media/'.$request->page.'/' . $request->category,$media->type, 'public');
 
             }
      

        // Update the media record with new file details
        $media->image = $imagePath;
    }

    // Save the updated media record
    $media->save();

        return redirect()->route('media.index')->with('success', 'Media updated successfully.');
    }

    public function destroy($id )
    {
        $media = Media::findOrFail($id);

        if ($media->image) {
            Storage::disk('public')->delete($media->image);
        }

        $media->delete();

        return redirect()->route('media.index')->with('success', 'Media deleted successfully.');
    }
}
// 