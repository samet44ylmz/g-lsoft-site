<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactCustomer;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact_customer = \App\Models\ContactCustomer::first();
        $messages = \App\Models\ContactCustomer::whereNotNull('message')->orderByDesc('created_at')->get();
        return view('admin.contact.index', compact('contact_customer', 'messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'             => ['required', 'max:200'],
            'description'       => ['required', 'max:500'],
            'adres_title'       => ['required', 'max:200'],
            'adres_description' => ['required', 'max:500'],
            'phone_title'       => ['required', 'max:200'],
            'phone_description' => ['required', 'max:500'],
            'hour_title'        => ['required', 'max:200'],
            'hour_description'  => ['required', 'max:500'],
            
        ]);

        $contact_customer = ContactCustomer::find($id);
        if (!$contact_customer) {
            $contact_customer = new ContactCustomer();
            $contact_customer->id = $id;
        }

        $contact_customer->title             = $request->input('title');
        $contact_customer->description       = $request->input('description');
        $contact_customer->adres_title       = $request->input('adres_title');
        $contact_customer->adres_description = $request->input('adres_description');
        $contact_customer->phone_title       = $request->input('phone_title');
        $contact_customer->phone_description = $request->input('phone_description');
        $contact_customer->hour_title        = $request->input('hour_title');
        $contact_customer->hour_description  = $request->input('hour_description');
        $contact_customer->save();

        return redirect()->back()->with('success', 'İletişim ayarları güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
