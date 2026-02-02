<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use Illuminate\Http\RedirectResponse;
use App\Models\FollowUp;

class PeopleController extends Controller
{
    // A constructor is not for queries.
    // A constructor is for: middleware, shared data, setup that runs on every method
    // public function __construct(private Person $person_m) {}

    // public function index() {
    //     $all_person = $this->person_m->all();
    // }

    // Use this Eloquent Format when you need to use the variable and its data in a View/Screen (Web Page)
    // Queries describe a specific screen, not the controller itself
    
    // People Screen
    public function index() {
        // Person model has a relationship with a follow-up status
        // callback function a query
        // where status in follow-up table/relationship is not_contacted
        $not_contacted_people = Person::whereHas('followUp', function ($query) { 
            $query->whereIn('status', ['not_contacted', 'contacted']);
        })->get();

         return view('people.index')->with('not_contacted_people', $not_contacted_people);
    }

    // public function add() {
    //     return view('people.add');
    // }

    # Store a new person
    public function store(Request $request): RedirectResponse {
        $validated = $request->validate([
        'full_name' => 'required|max:255',
        'contact' => 'required',
        'source' => 'required'
    ]);

        $person = Person::create($validated);
        FollowUp::create([
            'person_id' => $person->id,
            'status' => 'not_contacted'
        ]);

        return redirect('/');
    }

}
