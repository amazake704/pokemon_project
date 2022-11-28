<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request) {
        $hello = 'hello,world';
        return view('index');
    }
}
