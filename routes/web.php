<?php

use App\Http\Controllers\LeadController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Core pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Product pages
Route::get('/headstones/upright-monuments', [PageController::class, 'uprightMonuments'])->name('upright-monuments');
Route::get('/headstones/flat-markers', [PageController::class, 'flatMarkers'])->name('flat-markers');
Route::get('/headstones/bronze-memorials', [PageController::class, 'bronzeMemorials'])->name('bronze-memorials');
Route::get('/headstones/slant-bevel-markers', [PageController::class, 'slantBevelMarkers'])->name('slant-bevel-markers');
Route::get('/headstones/custom-engraving', [PageController::class, 'customEngraving'])->name('custom-engraving');
Route::get('/headstones/restoration', [PageController::class, 'restoration'])->name('restoration');
Route::get('/headstones/pet-memorials', [PageController::class, 'petMemorials'])->name('pet-memorials');

// Service area pages
Route::get('/service-areas/st-augustine', [PageController::class, 'stAugustine'])->name('st-augustine');
Route::get('/service-areas/orange-park', [PageController::class, 'orangePark'])->name('orange-park');
Route::get('/service-areas/jacksonville-beach', [PageController::class, 'jacksonvilleBeach'])->name('jacksonville-beach');
Route::get('/service-areas/fernandina-beach', [PageController::class, 'fernandinaBeach'])->name('fernandina-beach');
Route::get('/service-areas/macclenny', [PageController::class, 'macclenny'])->name('macclenny');

// Resource pages
Route::get('/resources', [PageController::class, 'resources'])->name('resources');
Route::get('/resources/buying-guide', [PageController::class, 'buyingGuide'])->name('buying-guide');
Route::get('/resources/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/resources/faq', [PageController::class, 'faq'])->name('faq');

// Cemetery hub + spokes
Route::get('/cemeteries', [PageController::class, 'cemeteries'])->name('cemeteries');
Route::get('/cemeteries/evergreen-cemetery', [PageController::class, 'evergreen'])->name('evergreen');
Route::get('/cemeteries/jacksonville-national-cemetery', [PageController::class, 'jacksonvilleNational'])->name('jacksonville-national');
Route::get('/cemeteries/hardage-giddens-oaklawn', [PageController::class, 'hardageGiddens'])->name('hardage-giddens');
Route::get('/cemeteries/riverside-memorial-park', [PageController::class, 'riversideMemorial'])->name('riverside-memorial');
Route::get('/cemeteries/jacksonville-memory-gardens', [PageController::class, 'jacksonvilleMemoryGardens'])->name('jacksonville-memory-gardens');
Route::get('/cemeteries/magnolia-cemetery', [PageController::class, 'magnoliaCemetery'])->name('magnolia-cemetery');
Route::get('/cemeteries/san-lorenzo-cemetery', [PageController::class, 'sanLorenzo'])->name('san-lorenzo');
Route::get('/cemeteries/craig-memorial-park', [PageController::class, 'craigMemorial'])->name('craig-memorial');
Route::get('/cemeteries/bosque-bello-cemetery', [PageController::class, 'bosqueBello'])->name('bosque-bello');
Route::get('/cemeteries/green-pine-cemetery', [PageController::class, 'greenPine'])->name('green-pine');
Route::get('/cemeteries/beaches-memorial-park', [PageController::class, 'beachesMemorial'])->name('beaches-memorial');
Route::get('/cemeteries/lee-kirkland-smith-cemeteries', [PageController::class, 'leeKirklandSmith'])->name('lee-kirkland-smith');

// Lead form submission
Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');

// Auth routes (Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
