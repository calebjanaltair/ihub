<?php

namespace App\Http\Controllers\Consultancy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Sheets;

class ConsultancyLeadsController extends Controller
{
    public function store(Request $request){
        $date = date('d-m-Y');
        $request->phone = '+1' . $request->phone;
        $datasheet = Sheets::spreadsheet('1O0ZkgTK8fGFsTgUG9QeqhUpIw5NX0WbukDCWkzPq6ls')->sheet('ConsultancyLeads')->append([['Date' => $date, 'Lead Name' => $request->name,  'Lead Email' => $request->email, 'Lead Phone' => $request->phone]]);
        return redirect()->back()->with('success', 'Thank you for your interest. We will get back to you shortly.');
    }
}
