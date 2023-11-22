<?php

namespace App\Http\Controllers\iHub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recruitment;

class RecruitmentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $recruitments = Recruitment::all();
        return view('admin.iHub.recruitment.index', compact('recruitments'));
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'link' => 'required',
        ]);

        $input = $request->all();

        $input['status'] = 1;
        $input['created_by'] = auth()->user()->id;
        $input['created_at'] = now();

        Recruitment::create($input);
        return redirect()->route('recruitment')->with('success', 'Recruitment Post added successfully');
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

        Recruitment::find($request->id)->update($input);

        return redirect()->route('recruitment')->with('success', 'Recruitment Post updated successfully');
    }
    public function delete(Request $request)
    {
        Recruitment::find($request->id)->delete();
        return redirect()->route('recruitment')->with('success', 'Recruitment Post deleted successfully');
    }
    public function deactivate(Request $request)
    {
        $recruitment = Recruitment::find($request->id);
        $recruitment->status = 0;
        $recruitment->save();
        return redirect()->back()->with('success', 'Recruitment Post deactivated successfully');
    }
    public function activate(Request $request)
    {
        $recruitment = Recruitment::find($request->id);
        $recruitment->status = 1;
        $recruitment->save();
        return redirect()->back()->with('success', 'Recruitment Post activated successfully');
    }
}
