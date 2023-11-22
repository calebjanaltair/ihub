<?php

namespace App\Http\Controllers\Training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Highlight;
class HighlightsController extends Controller
{
    public function index($id)
    {
        // dd($id);
        $highlights = Highlight::where('course_id', $id)->get();
        $courseID = $id;
        return view('admin.training.Courses.addHighlights', compact('highlights', 'courseID'));
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'course_id' => 'required', // this is the course id
            'name' => 'required',
        ]);

        $input = $request->all();

        $input['status'] = 1;
        $input['created_by'] = auth()->user()->id;
        $input['created_at'] = now();

        $jarvis = Highlight::create($input);
        return redirect()->back()->with('success', 'Record added successfully');
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'course_id' => 'required', // this is the course id
            'name' => 'required',
        ]);

        $input = $request->all();

        $input['updated_by'] = auth()->user()->id;
        $input['updated_at'] = now();

        Highlight::find($request->id)->update($input);
        return redirect()->back()->with('success', 'Record updated successfully');
    }
    public function delete(Request $request)
    {
        $cwca = Highlight::find($request->id);
       
        Highlight::find($request->id)->delete();
        return redirect()->back()->with('success', 'Record added successfully');
    }
    public function deactivate(Request $request)
    {
        $cwca = Highlight::find($request->id);
        $cwca->status = 0;
        $cwca->save();
        return redirect()->back()->with('success', 'Record deactivated successfully');
    }
    public function activate(Request $request)
    {
        $cwca = Highlight::find($request->id);
        $cwca->status = 1;
        $cwca->save();
        return redirect()->back()->with('success', 'Record activated successfully');
    }
}
