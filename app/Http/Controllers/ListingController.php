<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    

    private function createExcerpt($description, $maxLength = 100)
    {
        // Trim the description to the maximum length
        $excerpt = mb_substr($description, 0, $maxLength);

        // Check if there are any spaces within the maximum length to avoid cutting off words
        if (mb_strlen($description) > $maxLength) {
            $lastSpace = mb_strrpos($excerpt, ' ');
            $excerpt = $lastSpace !== false ? mb_substr($excerpt, 0, $lastSpace) : $excerpt;
        }

        // Add ellipsis (...) if the description was truncated
        if (mb_strlen($description) > $maxLength) {
            $excerpt .= '...';
        }

        return $excerpt;
    }


    //
    public function index()
    {
        $listings = Listing::all();

        foreach ($listings as $listing) {
            $listing->excerpt = $this->createExcerpt($listing->description);
        }

        return view('listings.listings', compact('listings'));
    }

    
    public function show($id)
    {
        $listing = Listing::findOrFail($id); // Fetch a single listing by ID or fail if not found
        return view('listings.single-listing', compact('listing'));
    }






    
}
