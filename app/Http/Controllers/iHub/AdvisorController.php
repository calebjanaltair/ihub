<?php

namespace App\Http\Controllers\iHub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advisor;

class AdvisorController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $advisors = Advisor::all();
        return view('admin.iHub.advisor.index', compact('advisors'));
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
            $destinationPath = public_path('/uploads/advisor');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        Advisor::create($input);
        return redirect()->route('advisor')->with('success', 'advisor added successfully');
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
            $advisor = Advisor::find($request->id);
            $destinationPath = public_path('/uploads/advisor');
            $old_image = $destinationPath . '/' . $advisor->image;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/advisor');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        Advisor::find($request->id)->update($input);

        return redirect()->route('advisor')->with('success', 'advisor updated successfully');
    }
    public function delete(Request $request)
    {
        $advisor = Advisor::find($request->id);
        $destinationPath = public_path('/uploads/advisor');
        $old_image = $destinationPath . '/' . $advisor->image;
        if (file_exists($old_image)) {
            @unlink($old_image);
        }
        Advisor::find($request->id)->delete();
        return redirect()->route('advisor')->with('success', 'advisor deleted successfully');
    }
    public function deactivate(Request $request)
    {
        $advisor = Advisor::find($request->id);
        $advisor->status = 0;
        $advisor->save();
        return redirect()->back()->with('success', 'advisor deactivated successfully');
    }
    public function activate(Request $request)
    {
        $advisor = Advisor::find($request->id);
        $advisor->status = 1;
        $advisor->save();
        return redirect()->back()->with('success', 'advisor activated successfully');
    }
}
