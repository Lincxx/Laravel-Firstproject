<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        $names = []; //["Dave", "Mike", "JZ"];

        return view('about', ['names' => $names]);
    }
}
