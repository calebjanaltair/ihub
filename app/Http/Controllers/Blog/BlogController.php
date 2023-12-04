<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $blogs = Blog::all();
        $blogs = blog_categories($blogs);
        return view('admin.blog.blogs.index', compact('blogs'));
    }
    public function add()
    {
        $categories = BlogCategory::all();
        return view('admin.blog.blogs.add', compact('categories'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'subtitle' => 'required',
            'image' => 'required',
            'categories' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Please fill all the required fields');
        }

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->subtitle = $request->subtitle;
        $blog->slug = str_replace(' ', '-', strtolower($request->title));
        if (Blog::where('slug', $blog->slug)->exists()) {
            return redirect()->back()->with('error', 'A blog with this title already exists!');
        }
        // dd($blog->slug);
        $blog->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/blog');
            $image->move($destinationPath, $name);
            $blog->image = $name;
        }
        $blog->save();
        if (add_category_records($request->categories, $blog->id)) {
            return redirect()->route('blogs')->with('success', 'Blog added successfully');
        }
        return redirect()->route('blogs')->with('success', 'Blog added successfully');
    }
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'subtitle' => 'required',
            'categories' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Please fill all the required fields');
        }
        $slug = str_replace(' ', '-', strtolower($request->title));
        $blog = Blog::find($request->id);
        $blog->title = $request->title;
        if ($blog->slug != $slug) {
            if (Blog::where('slug', $slug)->exists()) {
                return redirect()->back()->with('error', 'A blog with this title already exists!');
            }
        }
        $blog->slug = $slug;
        $blog->subtitle = $request->subtitle;
        $blog->description = $request->description;
        if ($request->hasFile('image')) {
            $destinationPath = public_path('/uploads/blog');
            $old_image = $destinationPath . '/' . $blog->image;
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/blog');
            $image->move($destinationPath, $name);
            $blog->image = $name;
        }
        $blog->save();
        update_categories_for_blog($request->categories, $blog->id);
        return redirect()->route('blogs')->with('success', 'Blog updated successfully');
    }
    public function edit($id)
    {
        $blog = Blog::find($id);
        $categories = BlogCategory::all();
        $blogCategories = categories_of_blog($id);
        return view('admin.blog.blogs.edit', compact(['blog', 'categories', 'blogCategories']));
    }
    public function destroy(Request $request)
    {
        $blog = Blog::find($request->id);
        if (delete_categories_blog($blog)) {
            Blog::find($request->id)->delete();
            return redirect()->route('blogs')->with('success', 'Blog deleted successfully');
        }

        return redirect()->route('blogs')->with('error', 'Blog cannot be deleted');
    }
    public function deactivate(Request $request)
    {
        $blog = Blog::find($request->id);
        $blog->status = 0;
        $blog->save();
        return redirect()->back()->with('success', 'Blog unpublished successfully');
    }
    public function activate(Request $request)
    {
        $blog = Blog::find($request->id);
        $blog->status = 1;
        $blog->save();
        return redirect()->back()->with('success', 'Blog published successfully');
    }

    public function ckeditor_upload(Request $request)
    {
        // dd($request->all());
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('/uploads/media'), $fileName);
            $url = asset('/uploads/media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }
}
