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
        $person_details = Person::with('followUp')->findOrFail($id);

        return view('people.edit', compact('person_details'));
    }

    # Store an updated details of a person
    public function update(Request $request, $id): RedirectResponse {
        $validated = $request->validate([
        'status' => [
            'required', 
            new Enum(Status::class)
        ],
        'note' => [
            'required',
            'string',
            'max:30000', // Set a reasonable upper limit
        ],
        'followed_up_by' => 'required|max:255',
        'followed_up_at' => now()
    ]);

    $person = Person::findOrFail($id);

    $person->followUp()->updateOrCreate(
        ['person_id' => $person->id], // Match criteria
        [
            'status'         => $validated['status'],
            'note'    => $validated['note'],
            'followed_up_by' => $validated['followed_up_by'],
            'followed_up_at' => now(), // Set the current timestamp
        ]
    );

        return redirect('/');
    }
    
    
}
