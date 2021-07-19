<?php

use Illuminate\Support\Facades\Route;

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
//navigation bar

Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/pastpapers', 'App\Http\Controllers\PagesController@pastpapers');
Route::get('/tutorial', 'App\Http\Controllers\PagesController@tutorial');
Route::get('/references', 'App\Http\Controllers\PagesController@references');
Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/contact_us', 'App\Http\Controllers\PagesController@contact_us');


//comments
Route::get('/comments', 'App\Http\Controllers\PostsController@comments');


//school departments
Route::get('/engineering', 'App\Http\Controllers\SchoolsController@engineering');
Route::get('/biological', 'App\Http\Controllers\SchoolsController@biological');
Route::get('/education', 'App\Http\Controllers\SchoolsController@education');
Route::get('/business', 'App\Http\Controllers\SchoolsController@business');

//semesters
Route::get('/semesters', 'App\Http\Controllers\SemestersController@semesters');

//academic years
Route::get('/academic_years', 'App\Http\Controllers\SchoolsController@academic_years');
Route::get('/academic_years_engineering', 'App\Http\Controllers\SchoolsController@academic_years_engineering');

// exam papaers
Route::get('/exampapers', 'App\Http\Controllers\SchoolsController@exampapers');

//Comments/posts
Route::resource('posts', 'App\Http\Controllers\PostsController');

//Exams
Route::get('/employees', 'App\Http\Controllers\EmpController@getAllEmployees');
Route::get('/download-pdf', 'App\Http\Controllers\EmpController@downloadPDF');

//Clients uploads
Route::view('upload','upload'); //first parameter is url and second parameter is filename
Route::post('upload', 'App\Http\Controllers\FilesController@index');//this url used in fileController

//Examination files.
Route::get('/downloadSampleece', 'App\Http\Controllers\ExamsPdfController@sampleece');
Route::get('/downloadSamplea', 'App\Http\Controllers\ExamsPdfController@samplea');
Route::get('/downloadSampleb', 'App\Http\Controllers\ExamsPdfController@sampleb');
Route::get('/downloadSamplec', 'App\Http\Controllers\ExamsPdfController@samplec');
Route::get('/downloadSampled', 'App\Http\Controllers\ExamsPdfController@sampled');
Route::get('/downloadSamplee', 'App\Http\Controllers\ExamsPdfController@samplee');
Route::get('/downloadSamplef', 'App\Http\Controllers\ExamsPdfController@samplef');
Route::get('/downloadSampleg', 'App\Http\Controllers\ExamsPdfController@sampleg');
Route::get('/downloadSampleh', 'App\Http\Controllers\ExamsPdfController@sampleh');
Route::get('/downloadSamplei', 'App\Http\Controllers\ExamsPdfController@samplei');
Route::get('/downloadSamplej', 'App\Http\Controllers\ExamsPdfController@samplej');


//Tutorila Pdfs
Route::get('/downloadProbability', 'App\Http\Controllers\TutorialPdfController@probabilityPdf');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
