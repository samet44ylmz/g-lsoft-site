<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Hero;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $about =About::first();
        return view('frontend.home', compact('hero', 'about'));
    }
}
