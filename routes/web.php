<?php

use App\Models\Link;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



Route::get('/', function () {
    $links = App\Models\Link::all();
 
    return view('welcome', ['links' => $links]);
});

Route::get('/submit', function () {
    return view('submit');
});


Route::post('/submit', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);

    $link = new App\Models\Link($data);
    $link->save();

    return $link;
});


 Auth::routes();
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

