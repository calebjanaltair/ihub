<?php

namespace App\Http\Controllers\Training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Models\Course;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $courses = Course::all();
        return view('admin.training.Courses.index', compact('courses'));
    }
    public function add()
    {
        return view('admin.training.Courses.add');
    }
    public function edit($id)
    {
        // dd($id);
        $course = Course::find($id);
        return view('admin.training.Courses.edit', compact('course'));
    }
    public function storeBasics(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'category_id' => 'required',
            'company_id' => 'required',
            'image' => 'required',
            'croppedImage' => 'required',
            'trainer' => 'required',
            'seats' => 'required',
            'fee' => 'required',
            'type' => 'required',
            'favourites' => 'required',
            'enrolled' => 'required',
            'schedule' => 'required',
            'description' => 'required',

        ]);

        $input = $request->all();

        $input['status'] = 0;
        $input['created_by'] = auth()->user()->id;
        $input['created_at'] = now();

        if ($request->croppedImage != null) {
            $image = $request->croppedImage;
            $filename = time() . '.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
            Image::make($request->croppedImage)->save(public_path('/uploads/Courses/') . $filename);
            $input['image'] = $filename;
        }
        if ($request->hasFile('other2')) {
            $file = $request->file('other2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/Courses/Curriculum/', $filename);
            $input['other2'] = $filename;
        }
        // create course
        $course = Course::create($input);
        // dd($course);
        return redirect()->route('course-testimonials', ['id' => $course->id]);
    }
    public function update(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'category_id' => 'required',
            'company_id' => 'required',
            'trainer' => 'required',
            'seats' => 'required',
            'fee' => 'required',
            'type' => 'required',
            'favourites' => 'required',
            'enrolled' => 'required',
            'schedule' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        $input['status'] = 0;
        $input['created_by'] = auth()->user()->id;
        $input['created_at'] = now();

        $course = Course::find($request->id);

        if ($request->croppedImage != null) {
            
            $image = $request->croppedImage;
            // upload new image
            $image = $request->croppedImage;
            $filename = time() . '.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
            Image::make($request->croppedImage)->save(public_path('/uploads/Courses/') . $filename);
            $input['image'] = $filename;
            $course->image = $filename;
            $course->save();
        }
        if ($request->hasFile('other2')) {
            $file = $request->file('other2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/Courses/Curriculum/', $filename);
            $course->other2 = $filename;
            $course->save();
        }
        // update the course
        $course->title = $request->title;
        $course->type = $request->type;
        $course->subtitle = $request->subtitle;
        $course->company_id = $request->company_id;
        $course->fee = $request->fee;
        $course->trainer = $request->trainer;
        $course->seats = $request->seats;
        $course->rating = $request->rating;
        $course->enrolled = $request->enrolled;
        $course->favourites = $request->favourites;
        $course->schedule = $request->schedule;
        $course->category_id = $request->category_id;
        $course->description = $request->description;
        $course->save();


        return redirect()->route('course-testimonials', ['id' => $course->id]);
    }
    public function delete(Request $request)
    {
        $testimonial = Course::find($request->id);
        
        DB::table('course_tetimonials')->where('course_id', $request->id)->delete();
        DB::table('career_transitions')->where('course_id', $request->id)->delete();
        DB::table('c_w_c_a_s')->where('course_id', $request->id)->delete();
        DB::table('highlights')->where('course_id', $request->id)->delete();
        DB::table('featured_courses')->where('course_id', $request->id)->delete();
        Course::find($request->id)->delete();
        return redirect()->route('course-management')->with('success', 'Course deleted successfully');
    }
    public function deactivate(Request $request)
    {
        $testimonial = Course::find($request->id);
        $testimonial->status = 0;
        $testimonial->save();
        return redirect()->back()->with('success', 'Course deactivated successfully');
    }
    public function activate(Request $request)
    {
        $testimonial = Course::find($request->id);
        $testimonial->status = 1;
        $testimonial->save();
        return redirect()->back()->with('success', 'Course activated successfully');
    }

    public function publish($id)
    {
        $course = Course::find($id);
        $course->status = 1;
        $course->publishstatus = 1;
        $course->save();
        // return redirect()->route('course-management'); with success message
        return redirect()->route('course-management')->with('success', 'Course published successfully');
    }
}
