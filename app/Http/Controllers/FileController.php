<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\File;
use Illuminate\Support\Facades\File as FileSystem;

class FileController extends Controller
{
    public function index()
    {
        $files = File::all();
        return view('admin.files.index', compact('files'));
    }

    public function create()
    {
        return view('files.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $file = $request->file('file');
        $fileName = str_replace(' ', '', $request->name) . '.' . $file->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/files');
        $file->move($destinationPath, $fileName);

        File::create([
            'name' => $request->input('name'),
            'file_path' => '/uploads/files/' . $fileName,
        ]);

        return redirect()->route('files.index');
    }

    public function show(File $file)
    {
        return view('files.show', compact('file'));
    }

    public function edit(File $file)
    {
        // Edit file details
    }

    public function update(Request $request, File $file)
    {
        // Update file details
    }

    public function destroy(File $file)
    {
        // Construct the file path in the public folder
        $filePath = public_path($file->file_path);

        // Check if the file exists
        if (FileSystem::exists($filePath)) {
            // Delete the file from the public folder
            FileSystem::delete($filePath);
        }

        // Delete the record from the database
        $file->delete();

        return redirect()->route('files.index')->with('success', 'File deleted successfully');
    }
}
