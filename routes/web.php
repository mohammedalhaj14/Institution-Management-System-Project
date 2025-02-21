<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [AuthController::class, 'registerView'])->name('user.register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

Route::get('/login', [AuthController::class, 'loginView'])->middleware('EnsureGuest')->name('user.login');
Route::post('/login', [AuthController::class, 'login'])->name('user.login');

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/about', [AuthController::class, 'about'])->name('about');

Route::get('/services', [AuthController::class, 'services'])->name('services');

Route::get('/contact', [AuthController::class, 'contactView'])->middleware('isStudent')->name('contact');

Route::get('/academicAdvising', [AuthController::class, 'academicAdvising'])->middleware('isStudent')->name('ourservices.academicAdvising');
Route::get('/tutoringServices', [AuthController::class, 'tutoringServices'])->middleware('isStudent')->name('ourservices.tutoringServices');
Route::get('/careerServices', [AuthController::class, 'careerServices'])->middleware('isStudent')->name('ourservices.careerServices');

Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('isAdmin')->name('admin.dashboard');
Route::get('/admin/students', [AdminController::class, 'students'])->middleware('isAdmin')->name('admin.students');
Route::get('/admin/advisors/index', [AdminController::class, 'advisors'])->middleware('isAdmin')->name('admin.advisors.index')->middleware('isAdmin');
Route::get('/admin/advisors/create', [AdminController::class, 'create'])->name('admin.advisors.create')->middleware('isAdmin');
Route::post('/advisors', [AdminController::class, 'createAdvisorStore'])->name('admin.advisors.store');
Route::get('/admin/messages', [AdminController::class, 'contact'])->middleware('isAdmin')->name('admin.messages');
Route::delete('/users/{userID}', [AdminController::class, 'destroyUser'])->name('users.destroy');
Route::delete('/advisors/{advisorID}', [AdminController::class, 'destroyAdvisor'])->name('advisors.destroy');
Route::post('/admin/messages', [AdminController::class, 'storeMessage'])->name('admin.messages');
Route::get('/admin/requests/home', [AdminController::class, 'home'])->name('admin.requests.home')->middleware('isAdmin');
Route::post('/academicAdvising', [AdminController::class, 'store'])->name('academicAdvising.store');
Route::get('/admin/requests/advising', [AdminController::class, 'advising'])->name('admin.requests.adving')->middleware('isAdmin');
Route::post('/tutoringRequests', [AdminController::class, 'tutoringRequest'])->name('tutoringRequests.store');
Route::get('/admin/requests/tutoring', [AdminController::class, 'tutoring'])->name('admin.requests.tutoring')->middleware('isAdmin');
Route::post('/careerRequests', [AdminController::class, 'careerRequest'])->name('careerRequests.store');
Route::get('/admin/requests/career', [AdminController::class, 'career'])->name('admin.requests.career')->middleware('isAdmin');
Route::get('/admin/blogs', [BlogController::class, 'index'])->name('admin.blogs.index');
Route::get('/admin/blogs/create', [BlogController::class, 'create'])->name('admin.blogs.create')->middleware('isAdmin');
Route::post('/admin/blogs', [BlogController::class, 'store'])->name('admin.blogs.store');
Route::get('/admin/blogs/{blog}', [BlogController::class, 'show'])->name('admin.blogs.show');
Route::get('/admin/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('admin.blogs.edit')->middleware('isAdmin');
Route::put('/blogs/{blog}', [BlogController::class, 'update'])->name('admin.blogs.update');
Route::delete('/admin/blogs/{blog}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');


