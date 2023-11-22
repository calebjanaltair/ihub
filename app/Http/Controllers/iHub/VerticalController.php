<?php

namespace App\Http\Controllers\iHub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vertical;

class VerticalController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $verticals = Vertical::all();
        return view('admin.iHub.vertical.index', compact('verticals'));
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'subtitle' => 'required',
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
            $destinationPath = public_path('/uploads/vertical');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        Vertical::create($input);
        return redirect()->route('vert')->with('success', 'Vertical added successfully');
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'subtitle' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();

        $input['updated_by'] = auth()->user()->id;
        $input['updated_at'] = now();

        // update image

        if ($request->hasFile('image')) {
            $vertical = Vertical::find($request->id);
            $destinationPath = public_path('/uploads/vertical');
            $old_image = $destinationPath . '/' . $vertical->image;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/vertical');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        Vertical::find($request->id)->update($input);

        return redirect()->route('vert')->with('success', 'Vertical updated successfully');
    }
    public function delete(Request $request)
    {
        $vertical = Vertical::find($request->id);
        $destinationPath = public_path('/uploads/vertical');
        $old_image = $destinationPath . '/' . $vertical->image;
        if (file_exists($old_image)) {
            @unlink($old_image);
        }
        Vertical::find($request->id)->delete();
        return redirect()->route('vert')->with('success', 'Vertical deleted successfully');
    }
    public function deactivate(Request $request)
    {
        $vertical = Vertical::find($request->id);
        $vertical->status = 0;
        $vertical->save();
        return redirect()->back()->with('success', 'Vertical deactivated successfully');
    }
    public function activate(Request $request)
    {
        $vertical = Vertical::find($request->id);
        $vertical->status = 1;
        $vertical->save();
        return redirect()->back()->with('success', 'Vertical activated successfully');
    }
}
