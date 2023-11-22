<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticker;
use App\Models\ihubNews;
use App\Models\HGB;
use App\Models\BOD;
use App\Models\Advisor;
use App\Models\Manager;
use App\Models\Colab;
use App\Models\ISP;
use App\Models\Vertical;
use App\Models\Gallery;
use App\Models\Recruitment;
use App\Models\Whatnew;
use App\Models\startup;
use App\Models\HomeTestimonial;
use App\Models\AboutNews;
use App\Models\FeaturedCourses;
use App\Models\Course;
use App\Models\CareerTransition;
use App\Models\navNews;
use App\Models\Hackathon;
use App\Models\Blog;
use App\Models\BlogCategory;

class HomeController extends Controller
{
    public function index()
    {
        $tickers = Ticker::where('status', 1)->get();
        $newses = ihubNews::where('status', 1)->get();
        $hgbs = HGB::where('status', 1)->get();
        $bods = BOD::where('status', 1)->get();
        $navNews = navNews::first();
        // $startups = startup::where('status', 1)->get();
        $startups = startup::where('status', 1)->limit(4)->get();
        // $verticals = Vertical::where('status', 1)->get(); only first four
        $verticals = Vertical::where('status', 1)->limit(4)->get();
        return view('welcome', compact('tickers', 'newses', 'hgbs', 'bods', 'navNews', 'startups', 'verticals'));
    }
    public function administration()
    {
        $advisors = Advisor::where('status', 1)->get();
        // Manager where position = 0 i.e. CEO
        $ceo = Manager::where('position', 0)->first();
        // Manager where position = 1 i.e. SPM
        $spm = Manager::where('position', 1)->first();
        // Manager where position = 2 i.e. Manager
        $pm = Manager::where('position', 2)->first();
        // Manager where position = 3 i.e. deputy Manager
        $dm = Manager::where('position', 3)->first();
        // Managers where position = 4 i.e. Assistant Manager
        $ams = Manager::where('position', 4)->where('status', 1)->get();
        // Manager where position = 5 i.e. associate manager
        $asocms = Manager::where('position', 5)->where('status', 1)->get();
        // Manager where position = 6 i.e. associate
        $assocs = Manager::where('position', 6)->where('status', 1)->get();
        // dd($ams);
        $navNews = navNews::first();
        $startups = startup::where('status', 1)->limit(4)->get();
        $verticals = Vertical::where('status', 1)->get();
        return view('user.administration', compact('navNews', 'advisors', 'ceo', 'spm', 'pm', 'dm', 'ams', 'asocms', 'assocs', 'startups', 'verticals'));
    }
    public function collaborations()
    {
        $navNews = navNews::first();
        // Colab where type 0 i.e. slides and status 1 i.e. active
        $slides = Colab::where('type', 0)->where('status', 1)->get();
        // Colab where type 1 i.e. activities and status 1 i.e. active
        $activities = Colab::where('type', 1)->where('status', 1)->get();
        $startups = startup::where('status', 1)->limit(4)->get();
        $verticals = Vertical::where('status', 1)->get();

        return view('user.collaborations', compact('slides', 'activities', 'navNews', 'startups', 'verticals'));
    }

    public function hackathon()
    {
        $hackathon = Hackathon::first();
        $navNews = navNews::first();
        $startups = startup::where('status', 1)->limit(4)->get();
        $verticals = Vertical::where('status', 1)->get();

        return view('user.hackathon', compact('hackathon', 'navNews', 'startups', 'verticals'));
    }
    public function contact()
    {
        // Whatnew where status 1
        $whatnews = Whatnew::where('status', 1)->get();
        // Recruitment where status 1
        $recruitments = Recruitment::where('status', 1)->get();
        $startups = startup::where('status', 1)->limit(4)->get();
        $verticals = Vertical::where('status', 1)->get();
        $navNews = navNews::first();
        return view('user.contact', compact('whatnews', 'recruitments', 'navNews', 'startups', 'verticals'));
    }
    public function csr()
    {
        $navNews = navNews::first();
        $startups = startup::where('status', 1)->limit(4)->get();
        $verticals = Vertical::where('status', 1)->get();
        return view('user.csr', compact('navNews', 'startups', 'verticals'));
    }
    public function gallery()
    {
        // Gallery where status 1
        $navNews = navNews::first();
        $slides = Gallery::where('status', 1)->get();
        $startups = startup::where('status', 1)->limit(4)->get();
        $verticals = Vertical::where('status', 1)->get();
        return view('user.gallery', compact('slides', 'navNews', 'startups', 'verticals'));
    }
    public function isp()
    {
        $navNews = navNews::first();
        // ISP where status 1
        $isps = ISP::where('status', 1)->get();
        $startups = startup::where('status', 1)->limit(4)->get();
        $verticals = Vertical::where('status', 1)->get();
        return view('user.isp', compact('isps', 'navNews', 'startups', 'verticals'));
    }
    public function verticals()
    {
        // Vertical where status 1
        $navNews = navNews::first();
        $startups = startup::where('status', 1)->limit(4)->get();
        $verticals = Vertical::where('status', 1)->get();
        return view('user.verticles', compact('verticals', 'navNews', 'startups'));
    }

    public function startups()
    {
        // startup where status 1
        $navNews = navNews::first();
        $startups = startup::where('status', 1)->get();
        $startups = startup::where('status', 1)->limit(4)->get();
        $verticals = Vertical::where('status', 1)->get();
        return view('user.startups.index', compact('startups', 'navNews', 'startups', 'verticals'));
    }

    public function training()
    {
        // HomeTestimonial here status = 1
        $testimonials = HomeTestimonial::where('status', 1)->get();

        // All coourses  where status = 1 and have id in FeatuedCourses 
        $courses = Course::where('status', 1)->whereIn('id', FeaturedCourses::pluck('course_id'))->get();
        // dd($courses);
        return view('user.training.index', compact('testimonials', 'courses'));
    }
    public function about()
    {
        // AboutNews where status 1
        $aboutNewses = AboutNews::where('status', 1)->get();
        return view('user.training.about', compact('aboutNewses'));
    }
    public function courses()
    {
        // CareerTransition random 3 where status = 1
        $testimonials = CareerTransition::where('status', 1)->inRandomOrder()->limit(3)->get();
        $courses = Course::where('status', 1)->get();
        return view('user.training.courses', compact('testimonials', 'courses'));
    }
    public function courseDetails($id)
    {
        $course = Course::where('id', $id)->first();
        // $featureds = Course::where('status', 1)->whereIn('id', FeaturedCourses::pluck('course_id'))->get(); except $id
        $featureds = Course::where('status', 1)->whereIn('id', FeaturedCourses::pluck('course_id'))->where('id', '!=', $id)->get();
        return view('user.training.course-detail', compact('course', 'featureds'));
    }
    public function contactCourse()
    {
        return view('user.training.contact');
    }
    public function blogs(){
        $navNews = navNews::first();
        $startups = startup::where('status', 1)->limit(4)->get();
        $verticals = Vertical::where('status', 1)->get();
        $blogs = Blog::where('status', 1)->get();
        $blogs = blog_categories($blogs);
        return view('user.blogs.index', compact('blogs' , 'navNews', 'startups', 'verticals'));
    }
    public function showblog($id){
        $navNews = navNews::first();
        $startups = startup::where('status', 1)->limit(4)->get();
        $verticals = Vertical::where('status', 1)->get();
        $blog = Blog::where('id', $id)->first();
        $title = $blog->title;
        $description = $blog->description;
        $image = $blog->image;

        $blogCategories = categories_of_blog($id);
        return view('user.blogs.show', compact('blog', 'title','description','image', 'blogCategories', 'navNews', 'startups', 'verticals'));
    }
}
