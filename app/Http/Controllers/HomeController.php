<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        return view('Home.home');
    }

    public function index2 () {
        return view('Home.new');
    }
}
