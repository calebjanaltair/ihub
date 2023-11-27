<?php

namespace App\Http\Controllers\iHub;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ihubNews;
use Intervention\Image\Facades\Image;

class iHubNewsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        $news = ihubNews::all();
        return view('admin.iHub.news.news&events', compact('news'));
    }
    public function addscreen(){
        return view('admin.iHub.news.addnewsihub');
    }
    public function news_edit($id)
    {
        $news = ihubNews::find($id);
        return view('admin.iHub.news.editnewsihub', compact('news'));
    }
    public function store(Request $request)
    {
        // dd(request()->all());
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'image' => 'required'
        ]);
        if ($request->croppedImage != null) {
            $image = $request->croppedImage;
            $filename = time() . '.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
            Image::make($request->croppedImage)->save(public_path('uploads/news/') . $filename);
        }
        $input = $request->all();
        $input['status'] = 1;
        $input['image'] = $filename;
        $input['created_by'] = auth()->user()->id;
        $input['created_at'] = now();
        // dd($input);
        ihubNews::create($input);
        return redirect()->route('ihub-news-all')->with('success', 'News added successfully');
    }
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'status' => 'required',
        ]);

        $news = ihubNews::find($request->id);

        // Handle the case when a new image (and possibly cropped) is uploaded
        if ($request->hasFile('image')) {
            $image_path = public_path('uploads/news/') . $news->image;
            // unlink($image_path);
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('/public/uploads/news/', $filename);
            $news->image = $filename;
        }
        if ($request->croppedImage != null) {
                
            $image = $request->croppedImage;
            $filename = time() . '.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
            Image::make($request->croppedImage)->save(public_path('uploads/news/') . $filename);
            $news->image = $filename;
        }
        // if request->link is empty then set it to null
        $news->link = $request->link == '' ? null : $request->link;
        // Update record without image
        $news->title = $request->title;
        $news->subtitle = $request->subtitle;
        $news->link = $request->link;
        $news->status = $request->status;
        $news->updated_by = auth()->user()->id;
        $news->updated_at = now();
        $news->save();

        return redirect()->route('ihub-news-all')->with('success', 'News updated successfully');
    }
    public function delete(Request $request)
    {
        $news = ihubNews::find($request->id);
        $news->delete();
        return redirect()->back()->with('success', 'News deleted successfully');
    }
    public function deactivate(Request $request)
    {
        $id = $request->id;
        $news = ihubNews::find($id);
        $news->status = 0;
        $news->save();
        return redirect()->back()->with('success', 'News deactivated successfully');
    }
    public function activate(Request $request)
    {
        $id = $request->id;
        $news = ihubNews::find($id);
        $news->status = 1;
        $news->save();
        return redirect()->back()->with('success', 'News activated successfully');
    }
}
