<?php

namespace App\Http\Controllers\Training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutNews;

class AboutNewsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $newses = AboutNews::all();
        return view('admin.training.AN.index', compact('newses'));
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $input = $request->all();

        $input['status'] = 1;
        $input['created_by'] = auth()->user()->id;
        $input['created_at'] = now();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/AN');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        AboutNews::create($input);
        return redirect()->route('AN')->with('success', 'News Card added successfully');
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();

        $input['updated_by'] = auth()->user()->id;
        $input['updated_at'] = now();

        // update image

        if ($request->hasFile('image')) {
            $news = AboutNews::find($request->id);
            $destinationPath = public_path('/uploads/AN');
            $old_image = $destinationPath . '/' . $news->image;
            
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/AN');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        AboutNews::find($request->id)->update($input);

        return redirect()->route('AN')->with('success', 'News Card updated successfully');
    }
    public function delete(Request $request)
    {
        $news = AboutNews::find($request->id);
        $destinationPath = public_path('/uploads/AN');
        $old_image = $destinationPath . '/' . $news->image;
        if (file_exists($old_image)) {
            @unlink($old_image);
        }
        AboutNews::find($request->id)->delete();
        return redirect()->route('AN')->with('success', 'News Card deleted successfully');
    }
    public function deactivate(Request $request)
    {
        $news = AboutNews::find($request->id);
        $news->status = 0;
        $news->save();
        return redirect()->back()->with('success', 'News Card deactivated successfully');
    }
    public function activate(Request $request)
    {
        $news = AboutNews::find($request->id);
        $news->status = 1;
        $news->save();
        return redirect()->back()->with('success', 'News Card activated successfully');
    }
}
