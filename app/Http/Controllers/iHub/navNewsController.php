<?php

namespace App\Http\Controllers\iHub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\navNews;
use App\Models\File;
use Intervention\Image\Facades\Image;
class navNewsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        // fetch the only navNews record
        $navNews = navNews::first();
        return view('admin.iHub.navNews.navNews', compact('navNews'));
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'link' => 'required',
        ]);

        $navNews = navNews::find($request->id);
        $navNews->title = $request->title;
        $navNews->subtitle = $request->subtitle;

        if ($request->croppedImage != null) {
            $image_path = public_path() . '/uploads/navNews/' . $navNews->image;
            // unlink($image_path);
            $image = $request->croppedImage;
            $filename = time() . '.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
            Image::make($request->croppedImage)->save(public_path('uploads/navNews/') . $filename);
            $navNews->image = $filename;
        }
        // if request->link is empty then set it to null
        $navNews->link = $request->link == '' ? null : $request->link;

        $navNews->updated_by = auth()->user()->id;
        $navNews->updated_at = now();
        $navNews->save();

        return redirect()->back()->with('success', 'Nav News Card updated successfully');
    }
}
