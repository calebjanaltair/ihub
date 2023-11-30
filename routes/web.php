<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\iHub\HgbController;
use App\Http\Controllers\iHub\BODController;
use App\Http\Controllers\iHub\AdvisorController;
use App\Http\Controllers\iHub\ManagementController;
use App\Http\Controllers\iHub\CollaborationController;
use App\Http\Controllers\iHub\ISPController;
use App\Http\Controllers\iHub\VerticalController;
use App\Http\Controllers\iHub\GalleryController;
use App\Http\Controllers\iHub\RecruitmentController;
use App\Http\Controllers\iHub\WhatnewController;
use App\Http\Controllers\iHub\ContactController;
use App\Http\Controllers\Startups\ProgramController;
use App\Http\Controllers\Startups\LeadsController;
use App\Http\Controllers\Training\HomepageTestimonialsController;
use App\Http\Controllers\Training\AboutNewsController;
use App\Http\Controllers\Training\ContactController as TrainingContactController;
use App\Http\Controllers\Training\CourseController;
use App\Http\Controllers\Training\CompanyController;
use App\Http\Controllers\Training\TransitionController;
use App\Http\Controllers\Training\WCAController;
use App\Http\Controllers\Training\HighlightsController;
use App\Http\Controllers\Training\FeatureController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\Training\TrainingLeadsController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Blog\CategoryController;
use App\Http\Controllers\Fellowships\FellowshipController;
use App\Http\Controllers\Consultancy\OurServicesController;
use App\Http\Controllers\Consultancy\WhyUsController;
use App\Http\Controllers\Consultancy\ConsultancyLeadsController;
use App\Http\Controllers\Auth\UpdatesController;
use App\Http\Controllers\Dashboard\StatsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Main Routes

Route::get('/clear', function () {
    Artisan::call('optimize:clear');
});

Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::get('/consultants', [HomeController::class, 'consultants'])->name('consultants');

Route::get('/administration', [HomeController::class, 'administration'])->name('administration');
Route::get('/collaborations', [HomeController::class, 'collaborations'])->name('collaborations');
Route::get('/hackathon', [HomeController::class, 'hackathon'])->name('hackathon');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/csr', [HomeController::class, 'csr'])->name('csr');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/isp', [HomeController::class, 'isp'])->name('isp');
Route::get('/verticals', [HomeController::class, 'verticals'])->name('verticals');

Route::get('/ihub-blogs', [HomeController::class, 'blogs'])->name('ihub-blogs');
Route::get('/ihub-blogs/{id}', [HomeController::class, 'showblog'])->name('show-blog');

Route::get('/verticals', [HomeController::class, 'verticals'])->name('verticals');
Route::post('/contactus', [ContactController::class, 'contactus'])->name('contactus');
Route::post('/feedbackmail', [ContactController::class, 'feedbackmail'])->name('feedbackmail');

// Startups Routes

Route::get('startups', [HomeController::class, 'startups'])->name('startups');
Route::post('/download-brochure', [LeadsController::class, 'download_brochure'])->name('download-brochure');

Route::get('fellowships', [HomeController::class, 'fellowships'])->name('fellowships');
Route::post('/download-fellowship-brochure', [FellowshipController::class, 'download_fellowship_brochure'])->name('download-fellowship-brochure');


// Dashboard Stats
Route::get('/get-stats', [StatsController::class, 'getStats'])->name('get.stats');


// Training Routes

Route::get('/training', [HomeController::class, 'training'])->name('training');
Route::get('/training-about', [HomeController::class, 'about'])->name('training-about');
Route::get('/training-courses', [HomeController::class, 'courses'])->name('training-courses');
Route::get('/training-courseDetails/{id}', [HomeController::class, 'courseDetails'])->name('training.courseDetails');
Route::get('/training-contact', [HomeController::class, 'contactCourse'])->name('training-contact');
Route::post('training-contactus', [TrainingContactController::class, 'contact'])->name('training-contactus');
Route::post('training-lead', [TrainingLeadsController::class, 'store'])->name('training-lead');




// Admin Panel Routes
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('profile');
Route::get('/users', [App\Http\Controllers\AdminController::class, 'users'])->name('users');
Route::post('/blockUser', [App\Http\Controllers\AdminController::class, 'blockUser'])->name('blockUser');
Route::post('/unblockUser', [App\Http\Controllers\AdminController::class, 'unblockUser'])->name('unblockUser');
Route::post('/deleteUser', [App\Http\Controllers\AdminController::class, 'deleteUser'])->name('deleteUser');
Route::post('/editOtherProfile', [App\Http\Controllers\Admin\UserManagementController::class, 'editOtherProfile'])->name('editOtherProfile');
Route::post('/editProfile', [App\Http\Controllers\AdminController::class, 'editProfile'])->name('editProfile');
Route::post('/changePswd', [App\Http\Controllers\AdminController::class, 'editPassword'])->name('editPassword');
Route::get('add-new-user',[App\Http\Controllers\Admin\UserManagementController::class, 'addUserView'])->name('add-new-user');
Route::post('create-new-user',[App\Http\Controllers\Admin\UserManagementController::class, 'createNewUser'])->name('create-new-user');

// Route::get('/ticker', [App\Http\Controllers\iHub\TickerController::class, 'index'])->name('ticker');
// Route::post('/ticker-add', [App\Http\Controllers\iHub\TickerController::class, 'store'])->name('ticker-add');
// Route::post('/ticker-update', [App\Http\Controllers\iHub\TickerController::class, 'update'])->name('ticker-update');
// Route::post('/ticker-del', [App\Http\Controllers\iHub\TickerController::class, 'delete'])->name('ticker-del');
// Route::post('/ticker-activate', [App\Http\Controllers\iHub\TickerController::class, 'activate'])->name('ticker-activate');
// Route::post('/ticker-deactivate', [App\Http\Controllers\iHub\TickerController::class, 'deactivate'])->name('ticker-deactivate');

Route::get('/navNews', [App\Http\Controllers\iHub\navNewsController::class, 'index'])->name('navNews');
Route::post('/navNews-update', [App\Http\Controllers\iHub\navNewsController::class, 'update'])->name('navNews-update');
// Route::post('/navNews-add', [App\Http\Controllers\iHub\navNewsController::class, 'store'])->name('navNews-add');
// Route::post('/navNews-del', [App\Http\Controllers\iHub\navNewsController::class, 'delete'])->name('navNews-del');
// Route::post('/navNews-activate', [App\Http\Controllers\iHub\navNewsController::class, 'activate'])->name('navNews-activate');
// Route::post('/navNews-deactivate', [App\Http\Controllers\iHub\navNewsController::class, 'deactivate'])->name('navNews-deactivate');


Route::get('/hackathonView', [App\Http\Controllers\iHub\HackathonController::class, 'index'])->name('hackathonView');
Route::post('/hackathon-update', [App\Http\Controllers\iHub\HackathonController::class, 'update'])->name('hackathon-update');

Route::get('/ihub-news-all', [App\Http\Controllers\iHub\iHubNewsController::class, 'index'])->name('ihub-news-all');
Route::get('/ihub-news-addscreen', [App\Http\Controllers\iHub\iHubNewsController::class, 'addscreen'])->name('ihub-news-addscreen');
Route::post('/ihub-news-add', [App\Http\Controllers\iHub\iHubNewsController::class, 'store'])->name('ihub-news-add');
Route::post('/ihub-news-update', [App\Http\Controllers\iHub\iHubNewsController::class, 'update'])->name('ihub-news-update');
Route::post('/ihub-news-del', [App\Http\Controllers\iHub\iHubNewsController::class, 'delete'])->name('ihub-news-del');
Route::post('/ihub-news-activate', [App\Http\Controllers\iHub\iHubNewsController::class, 'activate'])->name('ihub-news-activate');
Route::post('/ihub-news-deactivate', [App\Http\Controllers\iHub\iHubNewsController::class, 'deactivate'])->name('ihub-news-deactivate');
Route::get('/ihub-news-edit/{id}', [App\Http\Controllers\iHub\iHubNewsController::class, 'news_edit'])->name('ihub-news-edit');


Route::get('/hgb', [HgbController::class, 'index'])->name('hgb');
Route::post('/hgb-store', [HgbController::class, 'store'])->name('hgb-store');
Route::post('/hgb-update', [HgbController::class, 'update'])->name('hgb-update');
Route::post('/hgb-delete', [HgbController::class, 'delete'])->name('hgb-delete');
Route::post('/hgb-deactivate', [HgbController::class, 'deactivate'])->name('hgb-deactivate');
Route::post('/hgb-activate', [HgbController::class, 'activate'])->name('hgb-activate');


Route::get('/bod', [BODController::class, 'index'])->name('bod');
Route::post('/bod-store', [BODController::class, 'store'])->name('bod-store');
Route::post('/bod-update', [BODController::class, 'update'])->name('bod-update');
Route::post('/bod-delete', [BODController::class, 'delete'])->name('bod-delete');
Route::post('/bod-deactivate', [BODController::class, 'deactivate'])->name('bod-deactivate');
Route::post('/bod-activate', [BODController::class, 'activate'])->name('bod-activate');

Route::get('/advisor', [AdvisorController::class, 'index'])->name('advisor');
Route::post('/advisor-store', [AdvisorController::class, 'store'])->name('advisor-store');
Route::post('/advisor-update', [AdvisorController::class, 'update'])->name('advisor-update');
Route::post('/advisor-delete', [AdvisorController::class, 'delete'])->name('advisor-delete');
Route::post('/advisor-deactivate', [AdvisorController::class, 'deactivate'])->name('advisor-deactivate');
Route::post('/advisor-activate', [AdvisorController::class, 'activate'])->name('advisor-activate');

Route::get('/management', [ManagementController::class, 'index'])->name('management');
Route::post('/management-store', [ManagementController::class, 'store'])->name('management-store');
Route::post('/management-update', [ManagementController::class, 'update'])->name('management-update');
Route::post('/management-delete', [ManagementController::class, 'delete'])->name('management-delete');
Route::post('/management-deactivate', [ManagementController::class, 'deactivate'])->name('management-deactivate');
Route::post('/management-activate', [ManagementController::class, 'activate'])->name('management-activate');


Route::get('/colab', [CollaborationController::class, 'index'])->name('colab');
Route::post('/colab-store', [CollaborationController::class, 'store'])->name('colab-store');
Route::post('/colab-update', [CollaborationController::class, 'update'])->name('colab-update');
Route::post('/colab-delete', [CollaborationController::class, 'delete'])->name('colab-delete');
Route::post('/colab-deactivate', [CollaborationController::class, 'deactivate'])->name('colab-deactivate');
Route::post('/colab-activate', [CollaborationController::class, 'activate'])->name('colab-activate');


Route::get('/isprogram', [ISPController::class, 'index'])->name('isprogram');
Route::post('/isprogram-store', [ISPController::class, 'store'])->name('isprogram-store');
Route::post('/isprogram-update', [ISPController::class, 'update'])->name('isprogram-update');
Route::post('/isprogram-delete', [ISPController::class, 'delete'])->name('isprogram-delete');
Route::post('/isprogram-deactivate', [ISPController::class, 'deactivate'])->name('isprogram-deactivate');
Route::post('/isprogram-activate', [ISPController::class, 'activate'])->name('isprogram-activate');
Route::post('/download-isp', [ISPController::class, 'leadStore'])->name('download-isp');
Route::post('/download-csr', [ISPController::class, 'CSRleadStore'])->name('download-csr');

Route::get('/vert', [VerticalController::class, 'index'])->name('vert');
Route::post('/vert-store', [VerticalController::class, 'store'])->name('vert-store');
Route::post('/vert-update', [VerticalController::class, 'update'])->name('vert-update');
Route::post('/vert-delete', [VerticalController::class, 'delete'])->name('vert-delete');
Route::post('/vert-deactivate', [VerticalController::class, 'deactivate'])->name('vert-deactivate');
Route::post('/vert-activate', [VerticalController::class, 'activate'])->name('vert-activate');

Route::get('/galleria', [GalleryController::class, 'index'])->name('galleria');
Route::post('/galleria-store', [GalleryController::class, 'store'])->name('galleria-store');
Route::post('/galleria-update', [GalleryController::class, 'update'])->name('galleria-update');
Route::post('/galleria-delete', [GalleryController::class, 'delete'])->name('galleria-delete');
Route::post('/galleria-deactivate', [GalleryController::class, 'deactivate'])->name('galleria-deactivate');
Route::post('/galleria-activate', [GalleryController::class, 'activate'])->name('galleria-activate');

Route::get('/recruitment', [RecruitmentController::class, 'index'])->name('recruitment');
Route::post('/recruitment-store', [RecruitmentController::class, 'store'])->name('recruitment-store');
Route::post('/recruitment-update', [RecruitmentController::class, 'update'])->name('recruitment-update');
Route::post('/recruitment-delete', [RecruitmentController::class, 'delete'])->name('recruitment-delete');
Route::post('/recruitment-deactivate', [RecruitmentController::class, 'deactivate'])->name('recruitment-deactivate');
Route::post('/recruitment-activate', [RecruitmentController::class, 'activate'])->name('recruitment-activate');

Route::get('/what_new', [WhatnewController::class, 'index'])->name('what_new');
Route::post('/what_new-store', [WhatnewController::class, 'store'])->name('what_new-store');
Route::post('/what_new-update', [WhatnewController::class, 'update'])->name('what_new-update');
Route::post('/what_new-delete', [WhatnewController::class, 'delete'])->name('what_new-delete');
Route::post('/what_new-deactivate', [WhatnewController::class, 'deactivate'])->name('what_new-deactivate');
Route::post('/what_new-activate', [WhatnewController::class, 'activate'])->name('what_new-activate');


Route::get('/startup-programs', [ProgramController::class, 'index'])->name('startup-programs');
Route::post('/startup-programs-store', [ProgramController::class, 'store'])->name('startup-programs-store');
Route::post('/startup-programs-update', [ProgramController::class, 'update'])->name('startup-programs-update');
Route::post('/startup-programs-delete', [ProgramController::class, 'delete'])->name('startup-programs-delete');
Route::post('/startup-programs-deactivate', [ProgramController::class, 'deactivate'])->name('startup-programs-deactivate');
Route::post('/startup-programs-activate', [ProgramController::class, 'activate'])->name('startup-programs-activate');


Route::get('/fellowship-programs', [FellowshipController::class, 'index'])->name('fellowship-programs');
Route::post('/fellowship-programs-store', [FellowshipController::class, 'store'])->name('fellowship-programs-store');
Route::post('/fellowship-programs-update', [FellowshipController::class, 'update'])->name('fellowship-programs-update');
Route::post('/fellowship-programs-delete', [FellowshipController::class, 'delete'])->name('fellowship-programs-delete');
Route::post('/fellowship-programs-deactivate', [FellowshipController::class, 'deactivate'])->name('fellowship-programs-deactivate');
Route::post('/fellowship-programs-activate', [FellowshipController::class, 'activate'])->name('fellowship-programs-activate');


// Consultancy Services

Route::get('/consultancy-service', [OurServicesController::class, 'index'])->name('consultancy-service');
Route::post('/consultancy-service-store', [OurServicesController::class, 'store'])->name('consultancy-service-store');
Route::post('/consultancy-service-update', [OurServicesController::class, 'update'])->name('consultancy-service-update');
Route::post('/consultancy-service-delete', [OurServicesController::class, 'delete'])->name('consultancy-service-delete');
Route::post('/consultancy-service-deactivate', [OurServicesController::class, 'deactivate'])->name('consultancy-service-deactivate');
Route::post('/consultancy-service-activate', [OurServicesController::class, 'activate'])->name('consultancy-service-activate');

// Why Us

Route::get('/consultancy-whyus', [WhyUsController::class, 'index'])->name('consultancy-whyus');
Route::post('/consultancy-whyus-store', [WhyUsController::class, 'store'])->name('consultancy-whyus-store');
Route::post('/consultancy-whyus-update', [WhyUsController::class, 'update'])->name('consultancy-whyus-update');
Route::post('/consultancy-whyus-delete', [WhyUsController::class, 'delete'])->name('consultancy-whyus-delete');
Route::post('/consultancy-whyus-deactivate', [WhyUsController::class, 'deactivate'])->name('consultancy-whyus-deactivate');
Route::post('/consultancy-whyus-activate', [WhyUsController::class, 'activate'])->name('consultancy-whyus-activate');

// Consultancy Lead
Route::post('/consultancyRecord', [ConsultancyLeadsController::class, 'store'] )->name('consultancyRecord');


// Training Homepage Testimonials
Route::get('/HT', [HomepageTestimonialsController::class, 'index'])->name('HT');
Route::post('/HT-store', [HomepageTestimonialsController::class, 'store'])->name('HT-store');
Route::post('/HT-update', [HomepageTestimonialsController::class, 'update'])->name('HT-update');
Route::post('/HT-delete', [HomepageTestimonialsController::class, 'delete'])->name('HT-delete');
Route::post('/HT-deactivate', [HomepageTestimonialsController::class, 'deactivate'])->name('HT-deactivate');
Route::post('/HT-activate', [HomepageTestimonialsController::class, 'activate'])->name('HT-activate');

// Training about news and updates
Route::get('/AN', [AboutNewsController::class, 'index'])->name('AN');
Route::post('/AN-store', [AboutNewsController::class, 'store'])->name('AN-store');
Route::post('/AN-update', [AboutNewsController::class, 'update'])->name('AN-update');
Route::post('/AN-delete', [AboutNewsController::class, 'delete'])->name('AN-delete');
Route::post('/AN-deactivate', [AboutNewsController::class, 'deactivate'])->name('AN-deactivate');
Route::post('/AN-activate', [AboutNewsController::class, 'activate'])->name('AN-activate');


// Course Testimonials Management
Route::post('/course-testimonials-store', [CompanyController::class, 'store'])->name('course-testimonials-store');
Route::post('/course-testimonials-update', [CompanyController::class, 'update'])->name('course-testimonials-update');
Route::post('/course-testimonials-delete', [CompanyController::class, 'delete'])->name('course-testimonials-delete');
Route::post('/course-testimonials-deactivate', [CompanyController::class, 'deactivate'])->name('course-testimonials-deactivate');
Route::post('/course-testimonials-activate', [CompanyController::class, 'activate'])->name('course-testimonials-activate');

// Course Transition Management
Route::get('/course-transitions/{id}/edit', [TransitionController::class, 'index'])->name('course-transitions');
Route::post('/course-transitions-store', [TransitionController::class, 'store'])->name('course-transitions-store');
Route::post('/course-transitions-update', [TransitionController::class, 'update'])->name('course-transitions-update');
Route::post('/course-transitions-delete', [TransitionController::class, 'delete'])->name('course-transitions-delete');
Route::post('/course-transitions-deactivate', [TransitionController::class, 'deactivate'])->name('course-transitions-deactivate');
Route::post('/course-transitions-activate', [TransitionController::class, 'activate'])->name('course-transitions-activate');
// CWCA Management
Route::get('/cwca/{id}/edit', [WCAController::class, 'index'])->name('cwca');
Route::post('/cwca-store', [WCAController::class, 'store'])->name('cwca-store');
Route::post('/cwca-update', [WCAController::class, 'update'])->name('cwca-update');
Route::post('/cwca-delete', [WCAController::class, 'delete'])->name('cwca-delete');
Route::post('/cwca-deactivate', [WCAController::class, 'deactivate'])->name('cwca-deactivate');
Route::post('/cwca-activate', [WCAController::class, 'activate'])->name('cwca-activate');
// Highlights Management
Route::get('/highlights/{id}/edit', [HighlightsController::class, 'index'])->name('highlights');
Route::post('/highlights-store', [HighlightsController::class, 'store'])->name('highlights-store');
Route::post('/highlights-update', [HighlightsController::class, 'update'])->name('highlights-update');
Route::post('/highlights-delete', [HighlightsController::class, 'delete'])->name('highlights-delete');
Route::post('/highlights-deactivate', [HighlightsController::class, 'deactivate'])->name('highlights-deactivate');
Route::post('/highlights-activate', [HighlightsController::class, 'activate'])->name('highlights-activate');
// Featured Management
Route::get('/featured', [FeatureController::class, 'index'])->name('featured');
Route::post('/featured-store', [FeatureController::class, 'store'])->name('featured-store');
Route::post('/featured-delete', [FeatureController::class, 'remove'])->name('featured-delete');

// Companies
Route::post('/company-add', [CompanyController::class, 'addCompany'])->name('company-add');
Route::post('/category-add', [CompanyController::class, 'addCategory'])->name('category-add');


// Training Courses Management
Route::get('/course-management', [CourseController::class, 'index'])->name('course-management');
Route::get('/course-management-add', [CourseController::class, 'add'])->name('course-management-add');
Route::get('/course-management-one/{id}/edit', [CourseController::class, 'edit'])->name('course-management-one');
Route::post('/course-management-store', [CourseController::class, 'storeBasics'])->name('course-management-store');
Route::post('/course-management-update', [CourseController::class, 'update'])->name('course-management-update');
Route::post('/course-management-delete', [CourseController::class, 'delete'])->name('course-management-delete');
Route::post('/course-management-deactivate', [CourseController::class, 'deactivate'])->name('course-management-deactivate');
Route::post('/course-management-activate', [CourseController::class, 'activate'])->name('course-management-activate');

Route::get('/save&publish/{id}/edit', [CourseController::class, 'publish'])->name('save&publish');


Route::get('/course-testimonials/{id}/edit', [CompanyController::class, 'showTestimonials'])->name('course-testimonials');

Route::get('/user-details/{id}', [App\Http\Controllers\AdminController::class, 'userDetails'])->name('user-details');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blogs-add', [BlogController::class, 'add'])->name('blogs-add');
Route::post('/blogs-store', [BlogController::class, 'store'])->name('blogs-store');
Route::get('/blogs-edit/{id}', [BlogController::class, 'edit'])->name('blogs-edit');
Route::post('/blogs-update', [BlogController::class, 'update'])->name('blogs-update');
Route::post('/blogs-delete', [BlogController::class, 'destroy'])->name('blogs-delete');
Route::post('/blogs-activate', [BlogController::class, 'activate'])->name('blogs-activate');
Route::post('/blogs-deactivate', [BlogController::class, 'deactivate'])->name('blogs-deactivate');

Route::get('/categories-management', [CategoryController::class, 'index'])->name('categories-management');
Route::post('/categories-management-store', [CategoryController::class, 'store'])->name('categories-management-store');
Route::post('/categories-management-add', [CategoryController::class, 'categoryAdd'])->name('categories-management-add');
Route::post('/categories-management-update', [CategoryController::class, 'update'])->name('categories-management-update');
Route::post('/categories-management-delete', [CategoryController::class, 'destroy'])->name('categories-management-delete');
Route::get('/update/{token}', [UpdatesController::class, 'update'])->name('update');
Route::post('/ckeditor_upload', [BlogController::class, 'ckeditor_upload'])->name('ckeditor.upload');
Route::resource('files', FileController::class);
