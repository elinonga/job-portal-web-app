<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\JobPostController;
use App\Http\Controllers\ReplyJobController;
use App\Http\Controllers\EmployeeBlogController;
use App\Http\Controllers\EmployerBlogController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\ContactController;

use Illuminate\Support\Facades\Route;

use App\Models\JobPost;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Home Url
Route::get('/', function () {
    return view('welcome');
})->name('home');


// Dashboard Url
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    $jobs = JobPost::limit(6)->get();

    return view('dashboard', [
        'jobs' => $jobs,
    ]);

})->name('dashboard');


// Employers Url
Route::get('/post-job', [JobPostController::class, 'index'])->name('post-job');
Route::post('/post-job', [JobPostController::class, 'store']);
Route::get('/view-job', [JobPostController::class, 'show'])->name('view-job');
Route::get('/view-job/{job}/details', [JobPostController::class, 'details'])->name('view-job.details');
Route::get('/browse-candidates', [JobPostController::class, 'browseCandidates'])->name('browse-candidates');
Route::get('/employers-blog', [EmployerBlogController::class, 'index'])->name('employers-blog');


// Employee Url
Route::get('/find-jobs', [ReplyJobController::class, 'getJobs'])->name('find-jobs');
Route::get('/job-seekers-blog', [EmployeeBlogController::class, 'index'])->name('employee-blog');


// Companies Url
Route::get('/companies', [CompanyController::class, 'index'])->name('companies');


// Salaries Url
Route::get('/salaries', [SalaryController::class, 'index'])->name('salaries');


// Contact Us Url
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');


// Admin Urls
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('isAdmin');
