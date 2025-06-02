<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $work = Work::first();
        return view('admin.work.index', compact('work'));
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
    ]);

    $work = Work::findOrFail($id);

    $work->title_1 = $request->input('title_1');
    $work->description_1 = $request->input('description_1');
    $work->title_2 = $request->input('title_2');
    $work->description_2 = $request->input('description_2');
    $work->title_3 = $request->input('title_3');
    $work->description_3 = $request->input('description_3');
    $work->title_4 = $request->input('title_4');
    $work->description_4 = $request->input('description_4');

    $work->save(); 

    return redirect()->route('admin.work.index')->with('success', 'Work updated successfully.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
