<?php

namespace App\Http\Controllers\Training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeaturedCourses;
use App\Models\Course;


class FeatureController extends Controller
{
    public function index()
    {
        $featured_courses_ids =  FeaturedCourses::all()->pluck('course_id')->toArray();
        $featured_courses = Course::whereIn('id', $featured_courses_ids)->get();

        // count featured courses and send canAddMore variable to view
        $featured_courses_count = count($featured_courses);
        $canAddMore = true;
        if ($featured_courses_count == 3) {
            $canAddMore = false;
        }
        return view('admin.training.feature.index', compact('featured_courses' , 'canAddMore'));
    }

    public function store(Request $request)
    {
        // check if total count of featured courses is 3 then return error
        $featured_courses = FeaturedCourses::all();
        if (count($featured_courses) == 3) {
            return redirect()->route('featured')->with('error', 'You can not add more than 3 courses');
        }
        $course_id = $request->course_id;
        $featured_courses = FeaturedCourses::create([
            'course_id' => $course_id,
        ]);
        return redirect()->route('featured')->with('success', 'Course featured successfully');
    }
    public function remove(Request $request)
    {   
        $id = $request->id;
        // delete record from featured_courses table where course id = $id
        FeaturedCourses::where('course_id', $id)->delete();
        return redirect()->route('featured')->with('success', 'Course removed from feature successfully');
    }
}
