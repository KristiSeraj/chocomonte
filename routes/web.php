<?php

use Illuminate\Support\Facades\Route;
use App\Models\Products;

Route::get('/', function () {
    return view('home', [
        'greetings' => 'Hello',
    ]);
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/products', function() {
    return view('products', [
        'products' => Products::all(),
    ]);
});

Route::get('/products/{id}', function($id) {
    $product = Products::find($id);

    return view('product', ['product' => $product]);
});

Route::get('/contact', function() {
    return view('contact');
});
