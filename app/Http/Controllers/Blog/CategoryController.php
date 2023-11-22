<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    public function index()
    {
        $categories = BlogCategory::all();
        return view('admin.blog.categories.index', compact('categories'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:blog_categories,name'
        ]);

        if ($validator->fails()) {
            if ($validator->errors()->has('name')) {
                return redirect()->back()->with('error', 'A category with this name already exists!');
            }
        }
        $category = new BlogCategory();
        $category->name = $request->name;
        $category->save();
        return redirect()->back()->with('success', 'Category added successfully');
    }
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories,name'
        ]);
        if ($validator->fails()) {
            if ($validator->errors()->has('name')) {
                return redirect()->back()->with('error', 'A category with this name already exists!');
            }
        }
        $category = BlogCategory::find($request->id);
        $category->name = $request->name;
        $category->save();
        return redirect()->back()->with('success', 'Category updated successfully');
    }
    public function destroy(Request $request)
    {
        // dd($request->all());
        if (blog_count($request->id) != 0) {
            return redirect()->back()->with('error', 'This category cannot be deleted as it is associated with some blogs');
        } else {
            BlogCategory::find($request->id)->delete();
            return redirect()->back()->with('success', 'Category deleted successfully');
        }
    }
    public function categoryAdd(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $input = $request->all();

        $newcategory = BlogCategory::create($input);

        $categories = BlogCategory::all();

        // Ensure selected_categories is an array
        $selectedCategories = explode(',', $request->input('selected_categories', []));

        // Pass $selectedCategories to the view
        $html = view('admin.blog.blogs.categoriesOptions', compact('categories', 'selectedCategories', 'newcategory'))->render();

        return response()->json(['success' => 'Category added successfully', 'html' => $html]);
    }
}
