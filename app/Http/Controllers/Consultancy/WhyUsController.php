<?php

namespace App\Http\Controllers\Consultancy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Whyus;

class WhyUsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $whyuses = Whyus::all();
        return view('admin.consultancy.whyus.index', compact('whyuses'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
        ]);

        $input = $request->all();

        $input['status'] = 1;
        $input['created_by'] = auth()->user()->id;
        $input['created_at'] = now();

        Whyus::create($input);
        return redirect()->route('consultancy-whyus')->with('success', 'Record added successfully');
    }
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $input = $request->all();

        $input['updated_by'] = auth()->user()->id;
        $input['updated_at'] = now();

        Whyus::find($request->id)->update($input);

        return redirect()->route('consultancy-whyus')->with('success', 'Record updated successfully');
    }
    public function delete(Request $request)
    {
        $whyus = Whyus::find($request->id);
        Whyus::find($request->id)->delete();
        return redirect()->route('consultancy-whyus')->with('success', 'Record deleted successfully');
    }
    public function deactivate(Request $request)
    {
        $whyus = Whyus::find($request->id);
        $whyus->status = 0;
        $whyus->save();
        return redirect()->back()->with('success', 'Record deactivated successfully');
    }
    public function activate(Request $request)
    {
        $whyus = Whyus::find($request->id);
        $whyus->status = 1;
        $whyus->save();
        return redirect()->back()->with('success', 'Record activated successfully');
    }
}
