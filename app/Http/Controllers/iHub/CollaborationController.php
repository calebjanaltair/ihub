<?php

namespace App\Http\Controllers\iHub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Colab;

class CollaborationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $colabs = Colab::all();
        return view('admin.iHub.colab.index', compact('colabs'));
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'image' => 'required',
        ]);

        $input = $request->all();

        $input['status'] = 1;
        $input['created_by'] = auth()->user()->id;
        $input['created_at'] = now();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/colab');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        Colab::create($input);
        return redirect()->route('colab')->with('success', 'Colab added successfully');
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();

        $input['updated_by'] = auth()->user()->id;
        $input['updated_at'] = now();

        // update image

        if ($request->hasFile('image')) {
            $colab = Colab::find($request->id);
            $destinationPath = public_path('/uploads/colab');
            $old_image = $destinationPath . '/' . $colab->image;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/colab');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        Colab::find($request->id)->update($input);

        return redirect()->route('colab')->with('success', 'Colab updated successfully');
    }
    public function delete(Request $request)
    {
        $colab = Colab::find($request->id);
        $destinationPath = public_path('/uploads/colab');
        $old_image = $destinationPath . '/' . $colab->image;
        if (file_exists($old_image)) {
            @unlink($old_image);
        }
        Colab::find($request->id)->delete();
        return redirect()->route('colab')->with('success', 'Colab deleted successfully');
    }
    public function deactivate(Request $request)
    {
        $colab = Colab::find($request->id);
        $colab->status = 0;
        $colab->save();
        return redirect()->back()->with('success', 'Colab deactivated successfully');
    }
    public function activate(Request $request)
    {
        $colab = Colab::find($request->id);
        $colab->status = 1;
        $colab->save();
        return redirect()->back()->with('success', 'Colab activated successfully');
    }
}
