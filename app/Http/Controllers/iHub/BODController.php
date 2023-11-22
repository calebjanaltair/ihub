<?php

namespace App\Http\Controllers\iHub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BOD;

class BODController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $bods = BOD::all();
        return view('admin.iHub.bod.index', compact('bods'));
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
            $destinationPath = public_path('/uploads/bod');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        BOD::create($input);
        return redirect()->route('bod')->with('success', 'BOD added successfully');
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
            $bod = BOD::find($request->id);
            $destinationPath = public_path('/uploads/bod');
            $old_image = $destinationPath . '/' . $bod->image;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/bod');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        BOD::find($request->id)->update($input);

        return redirect()->route('bod')->with('success', 'BOD updated successfully');
    }
    public function delete(Request $request)
    {
        $bod = BOD::find($request->id);
        $destinationPath = public_path('/uploads/bod');
        $old_image = $destinationPath . '/' . $bod->image;
        if (file_exists($old_image)) {
            @unlink($old_image);
        }
        BOD::find($request->id)->delete();
        return redirect()->route('bod')->with('success', 'BOD deleted successfully');
    }
    public function deactivate(Request $request)
    {
        $bod = BOD::find($request->id);
        $bod->status = 0;
        $bod->save();
        return redirect()->back()->with('success', 'BOD deactivated successfully');
    }
    public function activate(Request $request)
    {
        $bod = BOD::find($request->id);
        $bod->status = 1;
        $bod->save();
        return redirect()->back()->with('success', 'BOD activated successfully');
    }
}
