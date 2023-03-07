<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegistration;
use App\Http\Controllers\UriController;
use \App\Http\Controllers\getIt;
use App\http\Controllers\CookieController;
use App\Http\Controllers\HomeController;
use App\http\Controllers\SessionController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\UploadFileController;
use App\Mail\welcomeUser;
use App\Http\Controllers\userController;
use App\Http\Controllers\ValidationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\WelcomeController;

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

// basic route

Route::get('/basic', [UserController::class, 'basic']);

// optional parameter
Route::get('site/{name?}', function ($name = 'TutorialsPoint') { return $name;});

// Route parameter
Route::get('/basic/{name}/{age}', [UserController::class, 'basic_parameter']);
// name Route
Route::get('user/profile', [UserController::class, 'showProfile'])->name('profile');


// middleware

Route::get('/about', [PostsController::class, 'about'])->middleware('protectedPage');
Route::get('/noaccess', [PostsController::class, 'access']);


// group middleware
Route::group(['middleware' => ['protectedPage2']], function(){
   Route::get('list1', function(){
         return '<h1> i am list';
   });
   Route::get('list2', function(){
      return '<h1> i am list2';
   });

   Route::get('list3', function(){
      return '<h1> i am list3';
   });
});
// session
Route::get('/foo/bar', [UriController::class, 'index']);
Route::get('session/get', [SessionController::class, 'accessSessionData']);
Route::get('session/set', [SessionController::class, 'storeSessionData']);
Route::get('session/remove', [SessionController::class, 'deleteSessionData']);

// validation and handling error && eloquent Model && component => using component as a flash message
Route::get('/validation',[ValidationController::class, 'showform'] );
Route::get('/students',[ValidationController::class, 'showStudent']);
Route::post('/create',[ValidationController::class, 'createStudent']);
Route::delete('/student/delete/{student}',[ValidationController::class, 'destroy']);
Route::get('/student/update/{student}/edit', [ValidationController::class, 'showUpdateForm']);
Route::put('/student/update/{student}', [ValidationController::class, 'update']);


// cookies
Route::get('/cookie/set',[CookieController::class, 'setCookie']);
Route::get('/cookie/get',[CookieController::class, 'getCookie']);

// response

Route::get('/go', function(){
   return response('hello', 200)->header('Content-type', 'text/html');
});


// file upload
Route::get('/uploadfile', [UploadFileController::class, 'index']);
Route::post('/upload', [UploadFileController::class, 'showUploadFile']);

// database
Route::get('/list',  [MemberController::class, 'lists']);
Route::get('/register2',  [MemberController::class, 'regPage']);
Route::get('/delete/{id}',  [MemberController::class, 'delete']);
Route::get('/edit/{id}', [MemberController::class, 'showData']);
Route::post('/edit/{id}', [MemberController::class, 'update']);
Route::post('add', [MemberController::class, 'addData']);

// localization

Route::view('lang', 'profile');
Route::get('lang/{lang}', function($lang){
      App::setLocale($lang);
      return view('profile',['lang'=> $lang]);
});

 
// email
Route::get('/email',function() {
   Mail::to('yunusabdullateef95@gmail.com')->send(new welcomeUser());
   return new welcomeUser();
});

Route::get('/', [WelcomeController::class, 'index'])->name('/welcome');

//manual authentication

Route::get('/register', [userController::class, 'regPage']);
Route::post('/store', [userController::class, 'store']);

Route::get('/login', [userController::class, 'login']);
Route::post('/authenticate', [userController::class, 'authenticate']);
Route::post('/logout', [userController::class, 'logout']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


