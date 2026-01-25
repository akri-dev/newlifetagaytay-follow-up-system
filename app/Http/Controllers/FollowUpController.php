<?php

namespace App\Http\Controllers;

use App\Enums\Status;
use App\Models\Person;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Enum;

class FollowUpController extends Controller
{
    # Show view to edit details of person follow-up
    public function edit($id) {
        $person_details = Person::all($id);
    
        return view('people.edit')->$person_details->followUp;
    }

    # Store a updated details person
    public function store(Request $request): RedirectResponse {
        $validated = $request->validate([
        'status' => [
            'required', 
            new Enum(Status::class)
        ],
        'description' => [
            'required',
            'string',
            'min:10',
            'max:30000', // Set a reasonable upper limit
        ],
        'followed_up_by' => 'required|max:255',
        'followed_up_at' => now()
    ]);

        return redirect('/');
    }
}
