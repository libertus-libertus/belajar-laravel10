<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('pages.home');
    }

    public function pricing() {
        return view('pages.pricing');
    }

    public function contact() {
        return view('pages.contact');
    }
}
