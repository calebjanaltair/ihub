<?php

namespace App\Http\Controllers\iHub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hackathon;
use App\Models\File;
use Intervention\Image\Facades\Image;

class HackathonController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        // fetch the only hackathon record
        $hackathon = Hackathon::first();
        return view('admin.iHub.hackathon.hackathon', compact('hackathon'));
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'register_link' => 'required',
            'description' => 'required',
        ]);

        $hackathon = Hackathon::find($request->id);
        $hackathon->title = $request->title;
        $hackathon->subtitle = $request->subtitle;
        $hackathon->description = $request->description;
        if($request->hasFile('brochure')){
            $brochure = $request->file('brochure');
            $filename = time() . '.' . $brochure->getClientOriginalExtension();
            $brochure->move(public_path('uploads/hackathon/'), $filename);
            $hackathon->brochure = $filename;
        }
        if($request->hasFile('poster')){
            $poster = $request->file('poster');
            $filename = time() . '.' . $poster->getClientOriginalExtension();
            $poster->move(public_path('uploads/hackathon/'), $filename);
            $hackathon->poster = $filename;
        }
        // // if request->link is empty then set it to null
        $hackathon->register_link = $request->register_link == '' ? null : $request->register_link;

        $hackathon->updated_by = auth()->user()->id;
        $hackathon->updated_at = now();
        $hackathon->save();

        return redirect()->back()->with('success', 'Hackathon updated successfully');
    }
}
