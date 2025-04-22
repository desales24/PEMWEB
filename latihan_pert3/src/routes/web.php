<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use App\Livewire\ShowHomePage;
use App\Livewire\ShowAbout;
use App\Livewire\ShowService;
use App\Livewire\ShowProject;
use App\Livewire\Contact;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/
Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});
/*
/ END
*/
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ShowHomePage::class)->name('home');
Route::get('/about', ShowAbout::class)->name('about');
Route::get('/service', ShowService::class)->name('service');
Route::get('/project', ShowProject::class)->name('project');
Route::get('/contact', Contact::class)->name('contact');
