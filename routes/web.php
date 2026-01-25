<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

# Show People List Not Contacted
Route::get('/', [PeopleController::class, 'index']);

# Store a Person
Route::post('/store', [PeopleController::class, 'store']);

