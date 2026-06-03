<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\ServiceCategory;
use App\Models\Contact;

class TeamController extends Controller
{
    public function TeamView()
    {
        $teams = Team::with('category')
            ->where('is_featured', 1)
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

        return view('team', compact('teams', 'servicecategories', 'contact'));
    }
}
