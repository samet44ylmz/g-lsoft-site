<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use File;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::first();

        return view('admin.about.index', compact('about'));
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
            'title'       => ['required', 'max:200'],
            'description' => ['required', 'max:500'],
            'image_1'     => ['max:3000', 'image'],
        ]);

        $about = About::first();
        $imagePath = $about ? $about->image_1 : null;

        if ($request->hasFile('image_1')) {
            if ($about && File::exists(public_path($about->image_1))) {
                File::delete(public_path($about->image_1));
            }
            $image = $request->file('image_1');
            $imageName = rand() . $image->getClientOriginalName();
            $image->move(public_path('/uploads'), $imageName);
            $imagePath = "/uploads/" . $imageName;
        }

        About::updateOrCreate(
            ['id' => $id],
            [
                'title'       => $request->title,
                'description' => $request->description,
                'image_1'     => isset($imagePath) ? $imagePath : ($about ? $about->image_1 : null),
            ]
        );

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
