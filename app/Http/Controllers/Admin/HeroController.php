<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;
use File;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero = Hero::first();
        return view('admin.hero.index', compact('hero'));
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
            'title'     => ['required', 'max:200'],
            'description' => ['required', 'max:500'],
            'image'     => ['max:3000', 'image'],
            'btn_text' => ['required', 'max:500'],
            'btn_url' => ['required', 'max:500'],
            'sub_title_1' => ['required', 'max:500'],
            'sub_title_2' => ['required', 'max:500'],
            'sub_title_3' => ['required', 'max:500'],
            'description_1' => ['required', 'max:500'],
            'description_2' => ['required', 'max:500'],
            'description_3' => ['required', 'max:500'],
        ]);

        $hero = Hero::first();
        if ($request->hasFile('image')) {
            if ($hero && File::exists(public_path($hero->image))) {
                File::delete(public_path($hero->image));
            }
            $image = $request->file('image');
            $imageName = rand() . $image->getClientOriginalName();
            $image->move(public_path('/uploads'), $imageName);
            $imagePath = "/uploads/" . $imageName;
        }

        Hero::updateOrCreate(
            ['id' => $id],
            [
                'title'     => $request->title,
                'description' => $request->description,
                'btn_text'  => $request->btn_text,
                'btn_url'   => $request->btn_url,
                'sub_title_1'   => $request->sub_title_1,
                'sub_title_2'   => $request->sub_title_2,
                'sub_title_3'   => $request->sub_title_3,
                'description_1'   => $request->description_1,
                'description_2'   => $request->description_2,
                'description_3'   => $request->description_3,
                'image'     => isset($imagePath) ? $imagePath : ($hero ? $hero->image : null),
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
