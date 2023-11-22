<?php

use App\Models\Manager;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;
use App\Models\Category;
use App\Models\Course;
use App\Models\FeaturedCourses;
use App\Models\CourseTetimonial;
use App\Models\CareerTransition;
use App\Models\CWCA;
use App\Models\Highlight;
if (!function_exists('postion_options')) {
    function postion_options()
    {
        $allowed_ceo_pos = 1;
        $allowed_spm = 1;
        $allowed_manager = 1;
        $allowed_deputy = 1;

        $ceo = Manager::where('position', 0)->count();
        $spm = Manager::where('position', 1)->count();
        $manager = Manager::where('position', 2)->count();
        $deputy = Manager::where('position', 3)->count();

        // create html options for positions absed on number of managers in each position // it is sending in "" i want html 
        $html = '';
        $html .= '<option disabled selected>Please Select an option</option>';
        if ($ceo < $allowed_ceo_pos) {
            $html .= '<option value="0">CEO</option>';
        }
        if ($spm < $allowed_spm) {
            $html .= '<option value="1">Senior Project Manager</option>';
        }
        if ($manager < $allowed_manager) {
            $html .= '<option value="2">Project Manager</option>';
        }
        if ($deputy < $allowed_deputy) {
            $html .= '<option value="3">Deputy Project Manager</option>';
        }
        $html .= '<option value="4">Associate Manager</option>';
        $html .= '<option value="5">Associate Admin</option>';
        $html .= '<option value="6">Associate</option>';

        return $html;
    }
}
if (!function_exists('edit_postion_options')) {
    function edit_postion_options()
    {
        $allowed_ceo_pos = 1;
        $allowed_spm = 1;
        $allowed_manager = 1;
        $allowed_deputy = 1;

        $ceo = Manager::where('position', 0)->count();
        $spm = Manager::where('position', 1)->count();
        $manager = Manager::where('position', 2)->count();
        $deputy = Manager::where('position', 3)->count();

        // create html options for positions absed on number of managers in each position // it is sending in "" i want html 
        $html = '';
        $html .= '<option disabled selected>Please Select an option</option>';
        if ($ceo < $allowed_ceo_pos) {
            $html .= '<option value="0">CEO</option>';
        } else {
            $html .= '<option value="0" disabled>CEO</option>';
        }
        if ($spm < $allowed_spm) {
            $html .= '<option value="1">Senior Project Manager</option>';
        } else {
            $html .= '<option value="1" disabled>Senior Project Manager</option>';
        }
        if ($manager < $allowed_manager) {
            $html .= '<option value="2">Project Manager</option>';
        } else {
            $html .= '<option value="2" disabled>Project Manager</option>';
        }
        if ($deputy < $allowed_deputy) {
            $html .= '<option value="3">Deputy Project Manager</option>';
        } else {
            $html .= '<option value="3" disabled>Deputy Project Manager</option>';
        }
        $html .= '<option value="4">Associate Manager</option>';
        $html .= '<option value="5">Associate Admin</option>';
        $html .= '<option value="6">Associate</option>';

        return $html;
    }
}
if (!function_exists('allCompanies')) {
    function allCompanies()
    {
        $companies = Company::all();
        // create options for select
        $html = '';
        $html .= '<option disabled selected>Please Select an option</option>';
        foreach ($companies as $company) {
            $html .= '<option value="' . $company->id . '">' . $company->name . '</option>';
        }
        return $html;
    }
}
if (!function_exists('allCategories')) {
    function allCategories()
    {
        $categories = Category::all();
        // create options for select
        $html = '';
        $html .= '<option disabled selected>Please Select an option</option>';
        foreach ($categories as $category) {
            $html .= '<option value="' . $category->id . '">' . $category->name . '</option>';
        }
        return $html;
    }
}

if (!function_exists('allNonFeaturedCourses')) {
    function allNonFeaturedCourses()
    {
        $featured_courses_ids =  FeaturedCourses::all()->pluck('course_id')->toArray();
        $featured_courses = Course::whereNotIn('id', $featured_courses_ids)->get();

        // create options for select
        $html = '';
        $html .= '<option disabled selected>Please Select an option</option>';
        foreach ($featured_courses as $featured_course) {
            $html .= '<option value="' . $featured_course->id . '">' . $featured_course->title . '</option>';
        }
        return $html;
        
    }
}
if (!function_exists('returnCompanyName')) {
    function returnCompanyName($id)
    {
        $company = Company::find($id);
        return $company->name;
    }
}
if (!function_exists('returnCompanyimage')) {
    function returnCompanyimage($id)
    {
        $company = Company::find($id);
        return $company->image;
    }
}

if(!function_exists('returnCategoryName')){
    function returnCategoryName($id){
        $category = Category::find($id);
        return $category->name;
    }
}
if(!function_exists('returnCourseTestimonials')){
    function returnCourseTestimonials($id){
        $testimonials = CourseTetimonial::where('course_id', $id)->get();
        return $testimonials;
    }
}
if(!function_exists('returnCourseTransitions')){
    function returnCourseTransitions($id){
        // $transitions = CareerTransition::where('course_id', $id)->get(); random 3
        $transitions = CareerTransition::where('course_id', $id)->inRandomOrder()->limit(3)->get();
        return $transitions;
    }
}
if(!function_exists('returnCourseHighlights')){
    function returnCourseHighlights($id){
        // $transitions = CareerTransition::where('course_id', $id)->get(); random 3
        $highlights = Highlight::where('course_id', $id)->get();        
        return $highlights;
    }
}
if(!function_exists('returnCourseCWCA')){
    function returnCourseCWCA($id){
        // $transitions = CareerTransition::where('course_id', $id)->get(); random 3
        $cwcas = CWCA::where('course_id', $id)->get();        
        return $cwcas;
    }
}
if(!function_exists('blog_categories')){
    function blog_categories($blogs){
        // for each $blog create $blog->categories an array containing blog_category names find relation from table blog_category_relation
        foreach($blogs as $blog){
            // $blog->categories = use DB to get categories and blog relation and then get categories name from blog_category table
            $blog->categories = DB::table('blog_category_relation')
            ->join('blog_categories', 'blog_category_relation.blog_category_id', '=', 'blog_categories.id')
            ->where('blog_category_relation.blog_id', $blog->id)
            ->get();
        }
        return $blogs;
    }
}

if(!function_exists('delete_categories_blog')){
    function delete_categories_blog($blog){
        // delete all records where blog_id = $blog->id from blog_category_relation table
        DB::table('blog_category_relation')->where('blog_id', $blog->id)->delete();
        return true; 
    }
}

if(!function_exists('add_category_records')){
    function add_category_records($categories, $blog_id){
        // add records in blog_category_relation table
        foreach($categories as $category){
            DB::table('blog_category_relation')->insert([
                'blog_id' => $blog_id,
                'blog_category_id' => $category
            ]);
        }
        return true;
    }
}
if(!function_exists('blog_count')){
    function blog_count($category_id){
        // return count of blogs in a category
        $count = DB::table('blog_category_relation')->where('blog_category_id', $category_id)->count();
        return $count;
    }
}
if(!function_exists('categories_of_blog')){
    function categories_of_blog($blog_id){
        // create an array of category_id associated with blogs from blog_category_relation table
        $categories = DB::table('blog_category_relation')->where('blog_id', $blog_id)->pluck('blog_category_id')->toArray();
        return $categories;
    }
}
if(!function_exists('update_categories_for_blog')){
    function update_categories_for_blog($categories, $blog_id){
        // compare $categories array and categories_of_blog($blog_id) array and delete records from blog_category_relation table if not in $categories and add in table if not already in table i hope you understand
        $blog_categories = categories_of_blog($blog_id);
        foreach($blog_categories as $blog_category){
            if(!in_array($blog_category, $categories)){
                DB::table('blog_category_relation')->where('blog_id', $blog_id)->where('blog_category_id', $blog_category)->delete();
            }
        }
        foreach($categories as $category){
            if(!in_array($category, $blog_categories)){
                DB::table('blog_category_relation')->insert([
                    'blog_id' => $blog_id,
                    'blog_category_id' => $category
                ]);
            }
        }
        return true;
    }
}

