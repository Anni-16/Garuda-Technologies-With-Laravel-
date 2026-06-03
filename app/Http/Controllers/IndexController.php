<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\ServiceCategory;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Contact;

class IndexController extends Controller
{
    public function IndexPage()
    {
        //  For About Section
        $aboutus = About::first();

        // For Services Categories
        $servicecategories = ServiceCategory::where('is_active', 1)
            ->orderBy('created_at', 'asc')
            ->limit(4)
            ->get();

        // For Teams
        $teams = Team::with('category')
            ->where('is_featured', 1)
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();

        // For Testimonial
        $testimonials = Testimonial::where('status', 1)
            ->latest()
            ->get();


        // For Blog Section 
        $blogs = Blogs::with(['category', 'authorName'])
            ->where('is_featured', '1')
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();

        //  For contact 
        $contact = Contact::first();

        // Fix meta keywords (array → string)
        if (is_array($contact->meta_keywords)) {
            $contact->meta_keywords = implode(',', $contact->meta_keywords);
        }


        return view('welcome', compact('aboutus', 'servicecategories', 'teams', 'testimonials', 'blogs', 'contact'));
    }
}
