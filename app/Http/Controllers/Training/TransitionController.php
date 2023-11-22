<?php

namespace App\Http\Controllers\Training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CareerTransition;

class TransitionController extends Controller
{
    public function index($id)
    {
        // dd($id);
        $transitions = CareerTransition::where('course_id', $id)->get();
        $courseID = $id;
        return view('admin.training.Courses.addTransition', compact('transitions', 'courseID'));
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'course_id' => 'required', // this is the course id
            'name' => 'required',
            'title' => 'required',
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
            $destinationPath = public_path('/uploads/Coursetransition');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }
        $jarvis = CareerTransition::create($input);
        return redirect()->back()->with('success', 'Transition added successfully');
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'course_id' => 'required', // this is the course id
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();

        $input['updated_by'] = auth()->user()->id;
        $input['updated_at'] = now();

        // update image

        if ($request->hasFile('image')) {
            $transition = CareerTransition::find($request->id);
            $destinationPath = public_path('/uploads/Coursetransition');
            $old_image = $destinationPath . '/' . $transition->image;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/Coursetransition');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        CareerTransition::find($request->id)->update($input);
        return redirect()->back()->with('success', 'Transition updated successfully');
    }
    public function delete(Request $request)
    {
        $transition = CareerTransition::find($request->id);
        $destinationPath = public_path('/uploads/Coursetransition');
        $old_image = $destinationPath . '/' . $transition->image;
        if (file_exists($old_image)) {
            @unlink($old_image);
        }
        CareerTransition::find($request->id)->delete();
        return redirect()->back()->with('success', 'Transition added successfully');
    }
    public function deactivate(Request $request)
    {
        $transition = CareerTransition::find($request->id);
        $transition->status = 0;
        $transition->save();
        return redirect()->back()->with('success', 'Transition deactivated successfully');
    }
    public function activate(Request $request)
    {
        $transition = CareerTransition::find($request->id);
        $transition->status = 1;
        $transition->save();
        return redirect()->back()->with('success', 'Transition activated successfully');
    }
}
