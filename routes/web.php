<?php
namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SelectSchool;
use App\Http\Livewire\DownloadPastpaperComponent;
use App\Http\Livewire\AddExamPaperComponent;
use App\Http\Livewire\CreateChatComponent;
use App\Http\Livewire\CreatePostComponent; 
use App\Http\Livewire\ShowUsersComponent; 
use App\Http\Livewire\UploadExamPaper;
use App\Models\Pastpaper;

use Illuminate\Support\Facades\Response;
use App\Http\Controllers\HomeController;

use App\Http\Livewire\EditUploadPastpaper;

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


$allpastpapers = Pastpaper::all();
foreach($allpastpapers as $pastpaper)
{
    Route::get('/assets/files/assets/{file}', function ($file = '{$pastpaper->pdf}'){
        return response()->download(public_path('/assets/files/assets/'.$file));
    });
}



/*
$allpastpapers = Pastpaper::all();
foreach($allpastpapers as $pastpaper)
{
    Route::get('/assets/files/assets/{file}', function ($file = '{$pastpaper->pdf}'){
        return response()->download(public_path('/assets/files/assets/'.$file));
    });
}
*/

//allpastpapers controller
Route::get('/allexampapers', 'App\Http\Controllers\AllPastpapersController@allPastpapers');

Route::get('/showusers', ShowUsersComponent::class)->name('showuser');
//Livewire Routes
//show users component


//Route::get('/selectschool', SelectSchool::class)->name('select.school');
//Livewire for uploading exam paper
Route::get('/addexampaper', AddExamPaperComponent::class)->middleware('auth')->name('addexampaper');
Route::get('/uploadexampaper', UploadExamPaper::class)->middleware('auth')->name('uploadexampaper');
//Route::get('/createlivewirepost', CreateChatComponent::class);
//Route::get('/writechat', CreateChatComponent::class);
Route::get('/writepost', 'App\Http\Livewire\CreateChatComponent@render');

//Livewire Route displaying to the browser
Route::get('/createpostcomponent', CreatePostComponent::class)->name('createpostcomponent');
//Livewire Route for downloading pastpaper
//Route::get('/exampaper/{slug}', DownloadPastpaperComponent::class)->name('specificexampaper');

//Navigation bar
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/pastpapers', 'App\Http\Controllers\PagesController@pastpapers');
Route::get('/tutorial', 'App\Http\Controllers\PagesController@tutorial');
Route::get('/references', 'App\Http\Controllers\PagesController@references');
Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/contact_us', 'App\Http\Controllers\PagesController@contact_us');





//school departments
Route::get('/engineering', 'App\Http\Controllers\SchoolsController@engineering');
Route::get('/biological', 'App\Http\Controllers\SchoolsController@biological');
Route::get('/education', 'App\Http\Controllers\SchoolsController@education');
Route::get('/business', 'App\Http\Controllers\SchoolsController@business');
Route::get('/aerospace', 'App\Http\Controllers\SchoolsController@aerospace');
Route::get('/agricultureAndNaturalResources', 'App\Http\Controllers\SchoolsController@agricultureAndNaturalResources');
Route::get('/artAndScialSciences', 'App\Http\Controllers\SchoolsController@artAndScialSciences');
Route::get('/informationSciences', 'App\Http\Controllers\SchoolsController@informationSciences');

//semesters
Route::get('/semesters', 'App\Http\Controllers\SemestersController@semesters');

//academic years
Route::get('/academic_years', 'App\Http\Controllers\SchoolsController@academic_years');
Route::get('/academic_years_engineering', 'App\Http\Controllers\SchoolsController@academic_years_engineering');

// exam papaers
Route::get('/exampapers', 'App\Http\Controllers\SchoolsController@exampapers');

//Comments/posts
//Route::resource('chatss', 'PostsController');
//Route::resource('posts', 'App\Http\Controllers\PostsController');
//Route::get('/posts', 'App\Http\Controllers\PostsController@show');
Route::get('/chats', 'App\Http\Controllers\PostsController@index');
//Route::get('/createchat', 'App\Http\Controllers\PostsController@create');
//Route::post('storechat', 'App\Http\Controllers\PostsController@store');
//comments
//Route::get('/comments', 'App\Http\Controllers\PostsController@comments');

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
Route::get('/downloadPastpaper', 'App\Http\Controllers\ExamsPdfController@downloadPastpaper');



//Tutorial Pdfs
//Route::get('/downloadProbability', 'App\Http\Controllers\TutorialPdfController@probabilityPdf');


Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index');
