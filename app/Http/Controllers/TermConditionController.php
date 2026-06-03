<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\Team;
use App\Models\TermConditions;
use App\Models\Contact;

class TermConditionController extends Controller
{
    public function TermsPage()
    {
        //  For About Section
        $terms = TermConditions::first();

        // Fix meta keywords (array → string)
        if (is_array($terms->meta_keywords)) {
            $terms->meta_keywords = implode(',', $terms->meta_keywords);
        }

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

        //  For contact 
        $contact = Contact::first();

        // Fix meta keywords (array → string)
        if (is_array($contact->meta_keywords)) {
            $contact->meta_keywords = implode(',', $contact->meta_keywords);
        }

        return view('terms-conditions', compact('terms', 'servicecategories', 'teams', 'contact'));
    }
}
