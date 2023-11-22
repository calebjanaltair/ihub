<?php

namespace App\Http\Controllers\Startups;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\startup;

class ProgramController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $startups = startup::all();
        return view('admin.startups.index', compact('startups'));
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'link' => 'required',
            'image' => 'required',
            'brochure' => 'required',
        ]);

        $input = $request->all();

        $input['status'] = 1;
        $input['created_by'] = auth()->user()->id;
        $input['created_at'] = now();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/startup/poster');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        if ($request->hasFile('brochure')) {
            $brochure = $request->file('brochure');
            $filename = time() . '.brochure.' . $brochure->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/startup/brochure');
            $brochure->move($destinationPath, $filename);
            $input['brochure'] = $filename;
        }

        startup::create($input);
        return redirect()->route('startup-programs')->with('success', 'Program added successfully');
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'link' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();

        $input['updated_by'] = auth()->user()->id;
        $input['updated_at'] = now();

        // update image

        if ($request->hasFile('image')) {
            $startup = startup::find($request->id);
            $destinationPath = public_path('/uploads/startup/poster');
            $old_image = $destinationPath . '/' . $startup->image;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/startup/poster');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        // update brochure

        if ($request->hasFile('brochure')) {
            $startup = startup::find($request->id);
            $destinationPath = public_path('/uploads/startup/brochure');
            $old_brochure = $destinationPath . '/' . $startup->brochure;
            if (file_exists($old_brochure)) {
                @unlink($old_brochure);
            }
            $brochure = $request->file('brochure');
            $filename = time() . '.brochure.' . $brochure->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/startup/brochure');
            $brochure->move($destinationPath, $filename);
            $input['brochure'] = $filename;
        }

        startup::find($request->id)->update($input);

        return redirect()->route('startup-programs')->with('success', 'Program updated successfully');
    }
    public function delete(Request $request)
    {
        $startup = startup::find($request->id);
        $destinationPath = public_path('/uploads/startup/poster');
        $old_image = $destinationPath . '/' . $startup->image;
        if (file_exists($old_image)) {
            @unlink($old_image);
        }

        $destinationPath = public_path('/uploads/startup/brochure');
        $old_brochure = $destinationPath . '/' . $startup->brochure;
        if (file_exists($old_brochure)) {
            @unlink($old_brochure);
        }

        startup::find($request->id)->delete();
        return redirect()->route('startup-programs')->with('success', 'Program deleted successfully');
    }
    public function deactivate(Request $request)
    {
        $startup = startup::find($request->id);
        $startup->status = 0;
        $startup->save();
        return redirect()->back()->with('success', 'Program deactivated successfully');
    }
    public function activate(Request $request)
    {
        $startup = startup::find($request->id);
        $startup->status = 1;
        $startup->save();
        return redirect()->back()->with('success', 'Program activated successfully');
    }
}
