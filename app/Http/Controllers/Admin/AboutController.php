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
        $request->validate([
            'title'       => ['required', 'max:200'],
            'description' => ['required', 'max:500'],
            'image_1'     => ['nullable', 'max:3000', 'image'],
            'image_2'     => ['nullable', 'max:3000', 'image'],
            'image_3'     => ['nullable', 'max:3000', 'image'],
        ]);

        $imagePaths = [];
        foreach (['image_1', 'image_2', 'image_3'] as $imgField) {
            $imagePaths[$imgField] = null;
            if ($request->hasFile($imgField)) {
                $image = $request->file($imgField);
                $imageName = rand() . $image->getClientOriginalName();
                $image->move(public_path('/uploads'), $imageName);
                $imagePaths[$imgField] = '/uploads/' . $imageName;
            }
        }

        About::create([
            'title'       => $request->title,
            'description' => $request->description,
            'image_1'     => $imagePaths['image_1'],
            'image_2'     => $imagePaths['image_2'],
            'image_3'     => $imagePaths['image_3'],
        ]);
       
        return redirect()->back()->with('success', 'About kaydı başarıyla eklendi.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Bekle 2 dk wc gidip geliyom jdsgjd tanan ğpjaspdğjaı
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
            'image_1'     => ['nullable', 'max:3000', 'image'],
            'image_2'     => ['nullable', 'max:3000', 'image'],
            'image_3'     => ['nullable', 'max:3000', 'image'],
        ]);

        $about = About::find($id);
        $imagePaths = [
            'image_1' => $about ? $about->image_1 : null,
            'image_2' => $about ? $about->image_2 : null,
            'image_3' => $about ? $about->image_3 : null,
        ];

        foreach (['image_1', 'image_2', 'image_3'] as $imgField) {
            if ($request->hasFile($imgField)) {
                if ($about && !empty($about->$imgField) && File::exists(public_path($about->$imgField))) {
                    File::delete(public_path($about->$imgField));
                }
                $image = $request->file($imgField);
                $imageName = rand() . $image->getClientOriginalName();
                $image->move(public_path('/uploads'), $imageName);
                $imagePaths[$imgField] = '/uploads/' . $imageName;
            }
        }

        About::updateOrCreate(
            ['id' => $id],
            [
                'title'       => $request->title,
                'description' => $request->description,
                'image_1'     => $imagePaths['image_1'],
                'image_2'     => $imagePaths['image_2'],
                'image_3'     => $imagePaths['image_3'],
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
