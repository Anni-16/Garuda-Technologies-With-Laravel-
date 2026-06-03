<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\ServiceCategory;
use App\Models\Contact;

class BlogController extends Controller
{
    public function BlogView()
    {
        $blogs = Blogs::with(['category', 'authorName'])
            ->where('is_featured', '1')
            ->when(request('search'), function ($query) {
                $search = request('search');

                $query->where(function ($q) use ($search) {
                    $q->where('title', 'like', "%{$search}%")
                        ->orWhere('description', 'like', "%{$search}%");
                });
            })
            ->orderBy('created_at', 'desc')
            ->paginate(6)
            ->withQueryString();

        // For Recent Blogs
        $recentBlogs = Blogs::where('is_featured', '1')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        foreach ($recentBlogs as $recent) {
            $recent->date = \Carbon\Carbon::parse($recent->published_at)->format('d M Y');
        }

        // For Services Categories
        $servicecategories = ServiceCategory::where('is_active', 1)
            ->orderBy('created_at', 'asc')
            ->limit(3)
            ->get();

        //  For contact 
        $contact = Contact::first();

        // Fix meta keywords (array → string)
        if (is_array($contact->meta_keywords)) {
            $contact->meta_keywords = implode(',', $contact->meta_keywords);
        }


        return view('blog', compact('blogs', 'recentBlogs', 'servicecategories', 'contact'));
    }

    // Show blog details by slug
    public function show($slug)
    {
        // For Details
        $blog = Blogs::where('slug', $slug)
            ->where('is_featured', '1')
            ->firstOrFail();

        // Fix meta keywords (array → string)
        if (is_array($blog->meta_keywords)) {
            $blog->meta_keywords = implode(',', $blog->meta_keywords);
        }


        // Format date
        $blog->formatted_date = \Carbon\Carbon::parse($blog->published_at)->format('d M Y');

        // For Services Categories
        $servicecategories = ServiceCategory::where('is_active', 1)
            ->orderBy('created_at', 'asc')
            ->limit(4)
            ->get();

        //  For contact 
        $contact = Contact::first();

        // Fix meta keywords (array → string)
        if (is_array($contact->meta_keywords)) {
            $contact->meta_keywords = implode(',', $contact->meta_keywords);
        }


        return view('blog-details', compact('blog', 'servicecategories', 'contact'));
    }
}
