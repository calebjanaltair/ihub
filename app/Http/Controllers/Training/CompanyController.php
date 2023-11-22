<?php

namespace App\Http\Controllers\Training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Category;
use App\Models\CourseTetimonial;

class CompanyController extends Controller
{
    public function addCompany(Request $request)
    {
        // validate request
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);
        $input = $request->all();

        $input['status'] = 1;
        $input['created_by'] = auth()->user()->id;
        $input['created_at'] = now();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/Company');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        $newcompany = Company::create($input);
        $companies = Company::all();
        // create options html for companies using blade file resources\views\admin\training\Courses\companyOptions.blade.php
        $html = view('admin.training.Courses.companyOptions', compact('companies'))->render();
        return response()->json(['success' => 'Company added successfully', 'company' => $newcompany, 'html' => $html]);
    }
    public function addCategory(Request $request)
    {
        // validate request
        $request->validate([
            'name' => 'required',
        ]);
        $input = $request->all();

        $input['status'] = 1;
        $input['created_by'] = auth()->user()->id;
        $input['created_at'] = now();

        $newcategory = Category::create($input);
        $companies = Category::all();
        // create options html for companies using blade file resources\views\admin\training\Courses\companyOptions.blade.php
        $html = view('admin.training.Courses.companyOptions', compact('companies'))->render();
        return response()->json(['success' => 'Category added successfully', 'category' => $newcategory, 'html' => $html]);
    }
    public function showTestimonials($id)
    {
        // dd($id);
        $testimonials = CourseTetimonial::where('course_id', $id)->get();
        $courseID = $id;
        return view('admin.training.Courses.addTestimonials', compact('testimonials', 'courseID'));
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
            $destinationPath = public_path('/uploads/CourseTestimonials');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }
        $jarvis = CourseTetimonial::create($input);
        return redirect()->back()->with('success', 'Testimonial added successfully');
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
            $testimonial = CourseTetimonial::find($request->id);
            $destinationPath = public_path('/uploads/CourseTestimonials');
            $old_image = $destinationPath . '/' . $testimonial->image;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/CourseTestimonials');
            $image->move($destinationPath, $filename);
            $input['image'] = $filename;
        }

        CourseTetimonial::find($request->id)->update($input);
        // return redirect to this routte: Route::get('/course-testimonials/{id}/edit', [AboutNewsController::class, 'index'])->name('course-testimonials');
        return redirect()->back()->with('success', 'Testimonial added successfully');
    }
    public function delete(Request $request)
    {
        $testimonial = CourseTetimonial::find($request->id);
        $destinationPath = public_path('/uploads/CourseTestimonials');
        $old_image = $destinationPath . '/' . $testimonial->image;
        if (file_exists($old_image)) {
            @unlink($old_image);
        }
        CourseTetimonial::find($request->id)->delete();
        return redirect()->back()->with('success', 'Testimonial added successfully');
    }
    public function deactivate(Request $request)
    {
        $testimonial = CourseTetimonial::find($request->id);
        $testimonial->status = 0;
        $testimonial->save();
        return redirect()->back()->with('success', 'Testimonial deactivated successfully');
    }
    public function activate(Request $request)
    {
        $testimonial = CourseTetimonial::find($request->id);
        $testimonial->status = 1;
        $testimonial->save();
        return redirect()->back()->with('success', 'Testimonial activated successfully');
    }
}
