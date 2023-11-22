<?php

namespace App\Http\Controllers\iHub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.iHub.gallery.index', compact('galleries'));
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        $input = $request->all();

        $input['status'] = 1;
        $input['created_by'] = auth()->user()->id;
        $input['created_at'] = now();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/gallery');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        Gallery::create($input);
        return redirect()->route('galleria')->with('success', 'Gallery Slide added successfully');
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();

        $input['updated_by'] = auth()->user()->id;
        $input['updated_at'] = now();

        // update image

        if ($request->hasFile('image')) {
            $gallery = Gallery::find($request->id);
            $destinationPath = public_path('/uploads/gallery');
            $old_image = $destinationPath . '/' . $gallery->image;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/gallery');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        Gallery::find($request->id)->update($input);

        return redirect()->route('galleria')->with('success', 'Gallery Slide updated successfully');
    }
    public function delete(Request $request)
    {
        $gallery = Gallery::find($request->id);
        $destinationPath = public_path('/uploads/gallery');
        $old_image = $destinationPath . '/' . $gallery->image;
        if (file_exists($old_image)) {
            @unlink($old_image);
        }
        Gallery::find($request->id)->delete();
        return redirect()->route('galleria')->with('success', 'Gallery Slide deleted successfully');
    }
    public function deactivate(Request $request)
    {
        $gallery = Gallery::find($request->id);
        $gallery->status = 0;
        $gallery->save();
        return redirect()->back()->with('success', 'Gallery Slide deactivated successfully');
    }
    public function activate(Request $request)
    {
        $gallery = Gallery::find($request->id);
        $gallery->status = 1;
        $gallery->save();
        return redirect()->back()->with('success', 'Gallery Slide activated successfully');
    }
}
