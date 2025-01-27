<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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
        'products' => [
            [
                'id' => 1,
                'title' => 'Sunset Dangles',
                'price' => '$10',
                'style' => 'dangles',
            ],
            [
                'id' => 2,
                'title' => 'Ocean Hoops',
                'price' => '$12',
                'style' => 'hoops',
            ],
            [
                'id' => 3,
                'title' => 'Pastel Studs',
                'price' => '$8',
                'style' => 'studs',
            ],
        ]
    ]);
});

Route::get('/products/{id}', function($id) {
    $products = [
        [
            'id' => 1,
            'title' => 'Sunset Dangles',
            'price' => '$10',
            'style' => 'dangles',
        ],
        [
            'id' => 2,
            'title' => 'Ocean Hoops',
            'price' => '$12',
            'style' => 'hoops',
        ],
        [
            'id' => 3,
            'title' => 'Pastel Studs',
            'price' => '$8',
            'style' => 'studs',
        ],
    ];

    $product = Arr::first($products, fn($product) => $product['id'] == $id);

    return view('product', ['product' => $product]);
});

Route::get('/contact', function() {
    return view('contact');
});
