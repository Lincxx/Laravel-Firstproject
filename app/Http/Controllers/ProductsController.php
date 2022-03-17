<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $title = "Welcome to my Laravel 8 course";
        $description = "Create by Jeremy";

        $data = [
            'product1' => 'iPhone',
            'product2' => 'Samsung',
        ];

        // Compact method
        // return view('products.index', 
        //              compact('title', 'description'
        //         ));

        //With method - good for one variable, or an array 
        // return view('products.index')->with('title', $title);
        //return view('products.index')->with('data', $data);

        // Directly in the view
        return view('products.index', [
            'data' => $data
        ]);

    }

    public function about() {
        return "About page";
    }

    public function show($name) {
        $data = [
            'iphone' => 'iPhone',
            'samsung' => 'Samsung',
        ];
        return view('products.index', [
            'product' => $data[$name] ?? 'Product ' . $name . ' does not exist!'
        ]);
    }
}
