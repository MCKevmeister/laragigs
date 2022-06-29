<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Listings', [
        'heading' => "Latest Listings",
        'listings' => Listing::all()
    ]);
});

Route::get('/listings/{id}', function (Listing $listing) {
    return Inertia::render('Listing', [
        'listing' => [
            'title' => $listing->title,
            'tags' => $listing->tags,
            'company' => $listing->company,
            'location' => $listing->location,
            'email' => $listing->email,
            'website' => $listing->website,
            'description' => $listing->description,
        ]
    ]);
});
