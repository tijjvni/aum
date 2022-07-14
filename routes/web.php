<?php

use App\Http\Livewire\Galleries;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Livewire\AddImage;
use App\Http\Livewire\Receipt;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::view('/faculty', 'faculties')->name('faculty');

// Route::view('/programmes', 'programmes')->name('programmes');
Route::get('/programmes/{course}',[ProgrammeController::class, 'index'])->where('course', '[0-9]+')->name('programmes');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');
Route::view('/receipt', 'receipt')->name('receipt');

Route::view('/apply', 'application')->name('apply');
Route::get('/events', [EventController::class, 'index'])->name('gallery.index');
Route::get('/events/{event:name}', [EventController::class, 'show'])->name('gallery.show');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create')->middleware('auth');
Route::get('/news/{news:slug}', [NewsController::class, 'show'])->name('news.show');
Route::post('/news', [NewsController::class, 'store'])->name('news.store')->middleware('auth');
Route::get('/news/{news:slug}/edit', [NewsController::class, 'edit'])->name('news.edit')->middleware('auth');
Route::put('/news/{news:slug}/edit', [NewsController::class, 'update'])->name('news.update')->middleware('auth');
Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy')->middleware('auth');
// backend routes
Route::get('/gallery', Galleries::class)->middleware('auth')->name('gallery');
Route::get('/gallery/{gallery}', AddImage::class)->name('gallery.add')->middleware('auth');
Route::put('/gallery/{gallery:gallery}/edit', [NewsController::class, 'update'])->name('gallery.update')->middleware('auth');

Route::get('receipts', Receipt::class)->name('receipts');

Route::get('tour', function(){
	return "coming soon";
})->name('tour');



Route::get('fetchDepartmentCourses', [\App\Http\Controllers\FetchDepartmentCourses::class, 'index'])
    ->name('admission.fetch.departments');

Route::get('fetchFacultyDepartments', [\App\Http\Controllers\FetchFacultyDepartments::class, 'index'])
    ->name('admission.fetch.courses');

require __DIR__ . '/auth.php';