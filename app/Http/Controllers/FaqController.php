<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\Contact;

class FaqController extends Controller
{
    public function FaqView()
    {
        $faqs = Faq::where('is_active', 1)
            ->orderBy('created_at', 'desc')
            ->get();

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

        return view('faqs', compact('faqs', 'servicecategories', 'contact'));
    }
}
