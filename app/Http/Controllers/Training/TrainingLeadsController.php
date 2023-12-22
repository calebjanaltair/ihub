<?php

namespace App\Http\Controllers\Training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Sheets;

class TrainingLeadsController extends Controller
{
    public function store(Request $request)
    {
        $course = Course::find($request->id);
        $date = date('d-m-Y');
        $request->phone = $request->PhoneNumber_countrycodeval . $request->phone;
        $datasheet = Sheets::spreadsheet('1O0ZkgTK8fGFsTgUG9QeqhUpIw5NX0WbukDCWkzPq6ls')->sheet('TrainingLeads')->append([['Date' => $date, 'Lead Name' => $request->name, 'Training Program' => $course->title, 'Lead Email' => $request->Email, 'Lead Phone' => $request->phone]]);
        // dd($request->all());
        return response()->download(public_path('/uploads/Courses/Curriculum/' . $course->other2));

    }
}
