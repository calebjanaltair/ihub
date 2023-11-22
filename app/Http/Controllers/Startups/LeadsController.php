<?php

namespace App\Http\Controllers\Startups;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\startup;
use Sheets;

class LeadsController extends Controller
{
    public function download_brochure(Request $request)
    {
        // dd($request->all());


        // fetch startup against id
        $startup = startup::find($request->id);
        $date = date('d-m-Y');
        $request->phone = '+'.$request->phone;
        $datasheet = Sheets::spreadsheet('1O0ZkgTK8fGFsTgUG9QeqhUpIw5NX0WbukDCWkzPq6ls')->sheet('Leads')->append([['Date' => $date, 'Lead Name' => $request->name, 'Startup Program' => $startup->name, 'Lead Email' => $request->email, 'Lead Phone' => $request->phone]]);

        // return back with brochure file against startup id file is located at /uploads/startup/brochure/
        return response()->download(public_path('/uploads/startup/brochure/'.$startup->brochure));



        // dd("Check Sheets");
    }
}
