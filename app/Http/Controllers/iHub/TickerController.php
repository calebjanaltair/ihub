<?php

namespace App\Http\Controllers\iHub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticker;
use App\Models\File;

class TickerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $tickers = Ticker::all();
        return view('admin.iHub.ticker.ticker', compact('tickers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ticker' => 'required',
            'link' => 'required'
        ]);

        $ticker = new Ticker();
        $ticker->ticker = $request->ticker;
        $ticker->link = $request->link;
        $ticker->created_by = auth()->user()->id;
        $ticker->created_at = now();
        $ticker->save();
        return redirect()->back()->with('success', 'Ticker added successfully');
    }

    public function edit($id)
    {
        $ticker = Ticker::find($id);
        return view('iHub.editTicker', compact('ticker'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'ticker' => 'required',
            'link' => 'required'
        ]);

        $ticker = Ticker::find($request->id);
        $ticker->ticker = $request->ticker;
        $ticker->link = $request->link;
        $ticker->updated_by = auth()->user()->id;
        $ticker->updated_at = now();
        $ticker->save();

        return redirect()->back()->with('success', 'Ticker updated successfully');
    }

    public function delete(Request $request)
    {
        $ticker = Ticker::find($request->id);
        $ticker->delete();
        return redirect()->back()->with('success', 'Ticker deleted successfully');
    }

    public function deactivate(Request $request)
    {
        $id = $request->id;
        $ticker = Ticker::find($id);
        $ticker->status = 0;
        $ticker->save();
        return redirect()->back()->with('success', 'Ticker deactivated successfully');
    }

    public function activate(Request $request)
    {
        $id = $request->id;
        $ticker = Ticker::find($id);
        $ticker->status = 1;
        $ticker->save();
        return redirect()->back()->with('success', 'Ticker activated successfully');
    }
}
