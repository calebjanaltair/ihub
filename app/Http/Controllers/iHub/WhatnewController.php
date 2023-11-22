<?php

namespace App\Http\Controllers\iHub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Whatnew;

class WhatnewController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $whatnews = Whatnew::all();
        return view('admin.iHub.whatnew.index', compact('whatnews'));
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'image' => 'required',
        ]);

        $input = $request->all();

        $input['status'] = 1;
        $input['created_by'] = auth()->user()->id;
        $input['created_at'] = now();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/whatnew');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        Whatnew::create($input);
        return redirect()->route('what_new')->with('success', 'Card added successfully');
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();

        $input['updated_by'] = auth()->user()->id;
        $input['updated_at'] = now();

        // update image

        if ($request->hasFile('image')) {
            $whatnew = Whatnew::find($request->id);
            $destinationPath = public_path('/uploads/whatnew');
            $old_image = $destinationPath . '/' . $whatnew->image;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/whatnew');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        Whatnew::find($request->id)->update($input);

        return redirect()->route('what_new')->with('success', 'Card updated successfully');
    }
    public function delete(Request $request)
    {
        $whatnew = Whatnew::find($request->id);
        $destinationPath = public_path('/uploads/whatnew');
        $old_image = $destinationPath . '/' . $whatnew->image;
        if (file_exists($old_image)) {
            @unlink($old_image);
        }
        Whatnew::find($request->id)->delete();
        return redirect()->route('what_new')->with('success', 'Card deleted successfully');
    }
    public function deactivate(Request $request)
    {
        $whatnew = Whatnew::find($request->id);
        $whatnew->status = 0;
        $whatnew->save();
        return redirect()->back()->with('success', 'Card deactivated successfully');
    }
    public function activate(Request $request)
    {
        $whatnew = Whatnew::find($request->id);
        $whatnew->status = 1;
        $whatnew->save();
        return redirect()->back()->with('success', 'Card activated successfully');
    }
}
