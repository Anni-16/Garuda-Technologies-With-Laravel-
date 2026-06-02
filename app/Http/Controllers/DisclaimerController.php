<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\Team;
use App\Models\Disclaimer;
use App\Models\Contact;

class DisclaimerController extends Controller
{
    public function DisclaimerPage()
    {
        //  For About Section
        $disclaimers = Disclaimer::first();

        // Fix meta keywords (array → string)
        if (is_array($disclaimers->meta_keywords)) {
            $disclaimers->meta_keywords = implode(',', $disclaimers->meta_keywords);
        }

        // For Services Categories
        $servicecategories = ServiceCategory::where('is_active', 1)
            ->orderBy('created_at', 'asc')
            ->limit(3)
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


        return view('disclaimer', compact('disclaimers', 'servicecategories', 'teams', 'contact'));
    }
}
