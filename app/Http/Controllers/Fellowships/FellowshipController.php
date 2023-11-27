<?php

namespace App\Http\Controllers\Fellowships;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fellowship;
use Sheets;

class FellowshipController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $fellowships = Fellowship::all();
        return view('admin.fellowships.index', compact('fellowships'));
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
            $destinationPath = public_path('/uploads/fellowships/poster');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        if ($request->hasFile('brochure')) {
            $brochure = $request->file('brochure');
            $filename = time() . '.brochure.' . $brochure->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/fellowships/brochure');
            $brochure->move($destinationPath, $filename);
            $input['brochure'] = $filename;
        }

        Fellowship::create($input);
        return redirect()->route('fellowship-programs')->with('success', 'Program added successfully');
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
            $fellowship = Fellowship::find($request->id);
            $destinationPath = public_path('/uploads/fellowships/poster');
            $old_image = $destinationPath . '/' . $fellowship->image;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/fellowships/poster');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        // update brochure

        if ($request->hasFile('brochure')) {
            $fellowship = Fellowship::find($request->id);
            $destinationPath = public_path('/uploads/fellowships/brochure');
            $old_brochure = $destinationPath . '/' . $fellowship->brochure;
            if (file_exists($old_brochure)) {
                @unlink($old_brochure);
            }
            $brochure = $request->file('brochure');
            $filename = time() . '.brochure.' . $brochure->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/fellowships/brochure');
            $brochure->move($destinationPath, $filename);
            $input['brochure'] = $filename;
        }

        Fellowship::find($request->id)->update($input);

        return redirect()->route('fellowship-programs')->with('success', 'Program updated successfully');
    }
    public function delete(Request $request)
    {
        $fellowship = Fellowship::find($request->id);
        $destinationPath = public_path('/uploads/fellowships/poster');
        $old_image = $destinationPath . '/' . $fellowship->image;
        if (file_exists($old_image)) {
            @unlink($old_image);
        }

        $destinationPath = public_path('/uploads/fellowships/brochure');
        $old_brochure = $destinationPath . '/' . $fellowship->brochure;
        if (file_exists($old_brochure)) {
            @unlink($old_brochure);
        }

        Fellowship::find($request->id)->delete();
        return redirect()->route('fellowship-programs')->with('success', 'Program deleted successfully');
    }
    public function deactivate(Request $request)
    {
        $fellowship = Fellowship::find($request->id);
        $fellowship->status = 0;
        $fellowship->save();
        return redirect()->back()->with('success', 'Program deactivated successfully');
    }
    public function activate(Request $request)
    {
        $fellowship = Fellowship::find($request->id);
        $fellowship->status = 1;
        $fellowship->save();
        return redirect()->back()->with('success', 'Program activated successfully');
    }

    public function download_fellowship_brochure(Request $request)
    {
        $fellowship = Fellowship::find($request->id);
        $date = date('d-m-Y');
        $request->phone = '+' . $request->phone;
        $datasheet = Sheets::spreadsheet('1O0ZkgTK8fGFsTgUG9QeqhUpIw5NX0WbukDCWkzPq6ls')->sheet('FellowshipLeads')->append([['Date' => $date, 'Lead Name' => $request->name, 'Fellowship Program' => $fellowship->name, 'Lead Email' => $request->email, 'Lead Phone' => $request->phone]]);
        return redirect('/public/uploads/fellowships/brochure/' . $fellowship->brochure);
    }
}
