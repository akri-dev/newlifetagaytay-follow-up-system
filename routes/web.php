<?php

use App\Models\FollowUp;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\FollowUpController;

# Show People List Not Contacted
Route::get('/', [PeopleController::class, 'index'])->name('index');

# Store a Person
Route::post('/store', [PeopleController::class, 'store'])->name('store');

# Show Edit Follow-Up View
Route::get('/edit', [FollowUpController::class, 'edit'])->name('edit');

