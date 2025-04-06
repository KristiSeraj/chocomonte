<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    return view('home', [
        'greetings' => 'Hello',
    ]);
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/products', function() {
    return view('products.index', [
        'products' => Product::latest()->paginate(10)
    ]);
});

Route::get('/products/create', function() {
    return view('products.create');
});

Route::get('/products/{id}', function($id) {
    $product = Product::with('categories')->findOrFail($id);

    return view('products.show', ['product' => $product]);
});

Route::post('/products', function() {
   Product::create([
       'title' => request('title'),
       'style' => request('style'),
       'price' => request('price'),
   ]);

   return redirect('/products');
});

Route::get('/contact', function() {
    return view('contact');
});
