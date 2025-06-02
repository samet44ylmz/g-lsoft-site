<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\ContactCustomer;
use App\Models\Hero;
use App\Models\Services;
use App\Models\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $about =About::first();
        $work = Work::first();
        $services = Services::first();
        $contact_customer = ContactCustomer::first();
        return view('frontend.home', compact('hero', 'about', 'work', 'services', 'contact_customer'));
    }
}
