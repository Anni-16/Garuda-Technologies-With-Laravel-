<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Contact;

class ServiceController extends Controller
{
    // 1. ALL CATEGORIES PAGE
    public function index()
    {
        // For Testimonial
        $testimonials = Testimonial::where('status', 1)
            ->latest()
            ->get();


        // For Services Categories
        $servicecategories = ServiceCategory::where('is_active', 1)
            ->orderBy('created_at', 'asc')
            ->limit(3)
            ->get();

        $servicecategories1 = ServiceCategory::where('is_active', 1)
            ->latest()
            ->get();

        //  For contact 
        $contact = Contact::first();

        // Fix meta keywords (array → string)
        if (is_array($contact->meta_keywords)) {
            $contact->meta_keywords = implode(',', $contact->meta_keywords);
        }


        return view('services', compact('servicecategories1', 'testimonials', 'servicecategories', 'contact'));
    }

    // 2. CATEGORY PAGE
    public function category($category_slug)
    {
        // For Services Categories
        $servicecategories = ServiceCategory::where('is_active', 1)
            ->orderBy('created_at', 'asc')
            ->limit(3)
            ->get();

        // For Testimonial
        $testimonials = Testimonial::where('status', 1)
            ->latest()
            ->get();

        $category = ServiceCategory::with('services')
            ->where('category_slug', $category_slug)
            ->firstOrFail();

        //  For contact 
        $contact = Contact::first();

        // Fix meta keywords (array → string)
        if (is_array($contact->meta_keywords)) {
            $contact->meta_keywords = implode(',', $contact->meta_keywords);
        }


        return view('category', compact('category', 'servicecategories', 'testimonials', 'contact'));
    }

    // 3. SERVICE DETAILS PAGE
    public function details($category_slug, $service_slug)
    {

        // Find category
        $category = ServiceCategory::where('category_slug', $category_slug)
            ->firstOrFail();

        $service = Service::with('category')
            ->where('service_slug',  $service_slug)
            ->where('category_id', $category->id)
            ->firstOrFail();

        if (is_array($service->meta_keywords)) {
            $service->meta_keywords = implode(',', $service->meta_keywords);
        }

        // Same category ke other services (exclude current)
        $otherServices = Service::where('category_id', $service->category_id)
            ->where('id', '!=', $service->id)
            ->get();

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

        return view('services-details', compact('service', 'otherServices', 'servicecategories', 'contact'));
    }
}
