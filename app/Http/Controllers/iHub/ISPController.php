<?php

namespace App\Http\Controllers\iHub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ISP;
use Sheets;
use Carbon\Carbon;

class ISPController extends Controller
{
    public function leadStore(Request $request)
    {
        // dd($request->all());

        $isp = ISP::find($request->id);
        $date = Carbon::now()->format('d-m-Y');
        $request->phone = '+' . $request->phone;
        $datasheet = Sheets::spreadsheet('1O0ZkgTK8fGFsTgUG9QeqhUpIw5NX0WbukDCWkzPq6ls')->sheet('ISP Leads')->append([['Date' => $date, 'Lead Name' => $request->name, 'Innovation Program' => $isp->name, 'Lead Email' => $request->email, 'Lead Phone' => $request->phone]]);
        // return back with success
        return redirect()->back()->with('success', 'Your interest has been recorded successfully');
    }
    public function CSRleadStore(Request $request)
    {
        // dd($request->all());
        $date = Carbon::now()->format('d-m-Y');
        $request->phone = '+' . $request->phone;
        $datasheet = Sheets::spreadsheet('1O0ZkgTK8fGFsTgUG9QeqhUpIw5NX0WbukDCWkzPq6ls')->sheet('CSR Leads')->append([['Date' => $date, 'Lead Name' => $request->name, 'Lead Email' => $request->email, 'Lead Phone' => $request->phone]]);
        // return back with success
        return redirect()->back()->with('success', 'Your interest has been recorded successfully');
    }
    
    public function index()
    {
        $isps = ISP::all();
        return view('admin.iHub.isp.index', compact('isps'));
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
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
            $destinationPath = public_path('/uploads/isp');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        ISP::create($input);
        return redirect()->route('isprogram')->with('success', 'ISP added successfully');
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();

        $input['updated_by'] = auth()->user()->id;
        $input['updated_at'] = now();

        // update image

        if ($request->hasFile('image')) {
            $isp = ISP::find($request->id);
            $destinationPath = public_path('/uploads/isp');
            $old_image = $destinationPath . '/' . $isp->image;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/isp');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        ISP::find($request->id)->update($input);

        return redirect()->route('isprogram')->with('success', 'ISP updated successfully');
    }
    public function delete(Request $request)
    {
        $isp = ISP::find($request->id);
        $destinationPath = public_path('/uploads/isp');
        $old_image = $destinationPath . '/' . $isp->image;
        if (file_exists($old_image)) {
            @unlink($old_image);
        }
        ISP::find($request->id)->delete();
        return redirect()->route('isprogram')->with('success', 'ISP deleted successfully');
    }
    public function deactivate(Request $request)
    {
        $isp = ISP::find($request->id);
        $isp->status = 0;
        $isp->save();
        return redirect()->back()->with('success', 'ISP deactivated successfully');
    }
    public function activate(Request $request)
    {
        $isp = ISP::find($request->id);
        $isp->status = 1;
        $isp->save();
        return redirect()->back()->with('success', 'ISP activated successfully');
    }
}
