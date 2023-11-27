<?php

namespace App\Http\Controllers\Consultancy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ConsultancyService;


class OurServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $services = ConsultancyService::all();
        // dd($services);
        return view('admin.consultancy.services.index', compact('services'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
        ]);

        $input = $request->all();

        $input['status'] = 1;
        $input['created_by'] = auth()->user()->id;
        $input['created_at'] = now();

        ConsultancyService::create($input);
        return redirect()->route('consultancy-service')->with('success', 'Service added successfully');
    }
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
        ]);

        $input = $request->all();

        $input['updated_by'] = auth()->user()->id;
        $input['updated_at'] = now();

        ConsultancyService::find($request->id)->update($input);

        return redirect()->route('consultancy-service')->with('success', 'Service updated successfully');
    }
    public function delete(Request $request)
    {
        $service = ConsultancyService::find($request->id);
        ConsultancyService::find($request->id)->delete();
        return redirect()->route('consultancy-service')->with('success', 'Service deleted successfully');
    }
    public function deactivate(Request $request)
    {
        $service = ConsultancyService::find($request->id);
        $service->status = 0;
        $service->save();
        return redirect()->back()->with('success', 'Service deactivated successfully');
    }
    public function activate(Request $request)
    {
        $service = ConsultancyService::find($request->id);
        $service->status = 1;
        $service->save();
        return redirect()->back()->with('success', 'Service activated successfully');
    }
}
