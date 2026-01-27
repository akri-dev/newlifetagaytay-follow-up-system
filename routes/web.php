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
Route::get('/edit/{id}', [FollowUpController::class, 'edit'])->name('edit');

# Update Follow-Up Status
Route::patch('/edit/{id}/update', [FollowUpController::class, 'update'])->name('update');