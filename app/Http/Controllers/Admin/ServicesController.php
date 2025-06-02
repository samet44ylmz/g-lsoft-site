<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $services = Services::first();
        return view('admin.services.index', compact('services'));
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
            'title_1'       => ['required', 'max:200'],
            'description_1' => ['required', 'max:500'],
            'title_2'       => ['required', 'max:200'],
            'description_2' => ['required', 'max:500'],
            'title_3'       => ['required', 'max:200'],
            'description_3' => ['required', 'max:500'],
            'title_4'       => ['required', 'max:200'],
            'description_4' => ['required', 'max:500'],
            'title_5'       => ['required', 'max:200'],
            'description_5' => ['required', 'max:500'],
            'title_6'       => ['required', 'max:200'],
            'description_6' => ['required', 'max:500'], 
            'title_7'       => ['required', 'max:200'],
            'description_7' => ['required', 'max:500'],
        ]);

        $services = Services::find($id);
        if (!$services) {
            $services = new Services();
            $services->id = $id;
        }

        $services->title_1 = $request->input('title_1');
        $services->description_1 = $request->input('description_1');
        $services->title_2 = $request->input('title_2');
        $services->description_2 = $request->input('description_2');
        $services->title_3 = $request->input('title_3');
        $services->description_3 = $request->input('description_3');
        $services->title_4 = $request->input('title_4');
        $services->description_4 = $request->input('description_4');
        $services->title_5 = $request->input('title_5');
        $services->description_5 = $request->input('description_5');
        $services->title_6 = $request->input('title_6');
        $services->description_6 = $request->input('description_6');
        $services->title_7 = $request->input('title_7');
        $services->description_7 = $request->input('description_7');

        $services->save();

        return redirect()->route('admin.services.index')->with('success', 'Work updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
