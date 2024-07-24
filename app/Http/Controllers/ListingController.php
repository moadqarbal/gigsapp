<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class ListingController extends Controller
{
    

    public function index()
    {
        // Retrieve listings with applied filters and order them by latest
        $listings = Listing::latest()->filter(request(['tag']))->paginate(2);

        // Add excerpts to each listing
        foreach ($listings as $listing) {
            $listing->excerpt = $this->createExcerpt($listing->description);
        }

        // Return the listings to the view
        return view('listings.listings', ['listings' => $listings]);
    }

    // Assuming createExcerpt method is defined within this controller
    protected function createExcerpt($description)
    {
        // Your implementation for creating excerpts
        return substr($description, 0, 100) . '...';
    }

    
    public function show($id)
    {
        $listing = Listing::findOrFail($id); // Fetch a single listing by ID or fail if not found
        return view('listings.single-listing', ['listing' => $listing]);
    }

    public function create()
    {
        return view('listings.create');
    }

    public function store(Request $request)
    {
        
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos' , 'public');
        }

        Listing::create($formFields);

        return redirect('/')->with('message' , 'Listing Created');
    }


    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }

    public function update(Request $request ,Listing $listing)
    {
        
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Listing updated successfully!');
    }

    public function destroy(Listing $listing)
    {

        if($listing->logo && Storage::disk('public')->exists($listing->logo)) {
            Storage::disk('public')->delete($listing->logo);
        }
        
        $listing->delete();
        return redirect('/')->with('deleteMessage' , 'Listing deleted successfully!'); 
    }


    
}
