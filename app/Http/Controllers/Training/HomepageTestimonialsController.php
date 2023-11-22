<?php

namespace App\Http\Controllers\Training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeTestimonial;

class HomepageTestimonialsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $testimonials = HomeTestimonial::all();
        return view('admin.training.HT.index', compact('testimonials'));
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
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
            $destinationPath = public_path('/uploads/HT');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        HomeTestimonial::create($input);
        return redirect()->route('HT')->with('success', 'Testimonial added successfully');
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
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
            $testimonial = HomeTestimonial::find($request->id);
            $destinationPath = public_path('/uploads/HT');
            $old_image = $destinationPath . '/' . $testimonial->image;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/HT');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        HomeTestimonial::find($request->id)->update($input);

        return redirect()->route('HT')->with('success', 'Testimonial updated successfully');
    }
    public function delete(Request $request)
    {
        $testimonial = HomeTestimonial::find($request->id);
        $destinationPath = public_path('/uploads/HT');
        $old_image = $destinationPath . '/' . $testimonial->image;
        if (file_exists($old_image)) {
            @unlink($old_image);
        }
        HomeTestimonial::find($request->id)->delete();
        return redirect()->route('HT')->with('success', 'Testimonial deleted successfully');
    }
    public function deactivate(Request $request)
    {
        $testimonial = HomeTestimonial::find($request->id);
        $testimonial->status = 0;
        $testimonial->save();
        return redirect()->back()->with('success', 'Testimonial deactivated successfully');
    }
    public function activate(Request $request)
    {
        $testimonial = HomeTestimonial::find($request->id);
        $testimonial->status = 1;
        $testimonial->save();
        return redirect()->back()->with('success', 'Testimonial activated successfully');
    }
}
