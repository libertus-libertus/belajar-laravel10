<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function pricing() {
        return view('pricing');
    }

    public function contact() {
        return view('contact');
    }
}
