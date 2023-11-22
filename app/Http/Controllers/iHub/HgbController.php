<?php

namespace App\Http\Controllers\iHub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HGB;

class HgbController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $hgbs = HGB::all();
        return view('admin.iHub.hgb.index', compact('hgbs'));
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'image' => 'required',
        ]);

        $input = $request->all();

        $input['status'] = 1;
        $input['created_by'] = auth()->user()->id;
        $input['created_at'] = now();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/hgb');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        HGB::create($input);
        return redirect()->route('hgb')->with('success', 'HGB added successfully');
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();

        $input['updated_by'] = auth()->user()->id;
        $input['updated_at'] = now();

        // update image

        if ($request->hasFile('image')) {
            $hgb = HGB::find($request->id);
            $destinationPath = public_path('/uploads/hgb');
            $old_image = $destinationPath . '/' . $hgb->image;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/hgb');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        HGB::find($request->id)->update($input);

        return redirect()->route('hgb')->with('success', 'HGB updated successfully');
    }
    public function delete(Request $request)
    {
        $hgb = HGB::find($request->id);
        $destinationPath = public_path('/uploads/hgb');
        $old_image = $destinationPath . '/' . $hgb->image;
        if (file_exists($old_image)) {
            @unlink($old_image);
        }
        HGB::find($request->id)->delete();
        return redirect()->route('hgb')->with('success', 'HGB deleted successfully');
    }
    public function deactivate(Request $request)
    {
        $hgb = HGB::find($request->id);
        $hgb->status = 0;
        $hgb->save();
        return redirect()->back()->with('success', 'HGB deactivated successfully');
    }
    public function activate(Request $request)
    {
        $hgb = HGB::find($request->id);
        $hgb->status = 1;
        $hgb->save();
        return redirect()->back()->with('success', 'HGB activated successfully');
    }
}
