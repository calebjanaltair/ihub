<?php

namespace App\Http\Controllers\iHub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manager;

class ManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $managers = Manager::orderBy('position', 'asc')->get();
        return view('admin.iHub.management.index', compact('managers'));
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'position' => 'required',
            'image' => 'required',
        ]);

        $input = $request->all();

        $input['status'] = 1;
        $input['created_by'] = auth()->user()->id;
        $input['created_at'] = now();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/manager');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        Manager::create($input);
        return redirect()->route('management')->with('success', 'Manager added successfully');
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            // 'position' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();

        $input['updated_by'] = auth()->user()->id;
        $input['updated_at'] = now();

        // update image

        if ($request->hasFile('image')) {
            $manager = Manager::find($request->id);
            $destinationPath = public_path('/uploads/manager');
            $old_image = $destinationPath . '/' . $manager->image;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/manager');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        Manager::find($request->id)->update($input);

        return redirect()->route('management')->with('success', 'Manager updated successfully');
    }
    public function delete(Request $request)
    {
        $manager = Manager::find($request->id);
        $destinationPath = public_path('/uploads/manager');
        $old_image = $destinationPath . '/' . $manager->image;
        if (file_exists($old_image)) {
            @unlink($old_image);
        }
        Manager::find($request->id)->delete();
        return redirect()->route('management')->with('success', 'Manager deleted successfully');
    }
    public function deactivate(Request $request)
    {
        $manager = Manager::find($request->id);
        $manager->status = 0;
        $manager->save();
        return redirect()->back()->with('success', 'Manager deactivated successfully');
    }
    public function activate(Request $request)
    {
        $manager = Manager::find($request->id);
        $manager->status = 1;
        $manager->save();
        return redirect()->back()->with('success', 'Manager activated successfully');
    }
}
