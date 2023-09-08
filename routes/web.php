<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\Usercontroller;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\listcontroller;
use App\Http\Controllers\membercontroller;
use App\Http\Controllers\addmembercontroller;
use App\Http\Controllers\deletecontroller;
use App\Http\Controllers\users;
use App\Http\Controllers\usercontroller2;
use App\Http\Controllers\Employeecontroller;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// For redirect page
Route::get('/', function () {
    return redirect('about');
});


// The Access Page
// Route::get('/about', function () {
//     return view('about');
// });


// Sourtcut of Access Page
Route::view('about', '/about');
Route::view('contact', '/contact');
Route::view('users', '/users');
Route::view("user_1", "user");
Route::view('no_access_page', 'no_access_page');
Route::view("user_1", "user");
Route::view("login", "user");
// Route::view('home', 'home');


// for call from controller
Route::get("user", [Usercontroller::class, 'show']);
Route::get("gaurang", [Usercontroller::class, 'hello']);
Route::post("user", [Usercontroller::class, 'get_data']);


// for call from controller with params
Route::get("users/{name}", [Usercontroller::class, 'show']);


// whene you want to apply routed middleware use this syntex
// Routed Middleware
// Route::view("login", "user")->middleware('protectedPage');
// Route::view('home', 'home')->middleware('protectedPage');


// Group Middleware
Route::group(['middleware' => ['agechecker']], function () {
    // if you want to apply group middleware 
    // comment out in validation function
    // put your view route here
});


// Database connection here via Usercontroller
Route::get('home', [Usercontroller::class, 'index']);


// Database connection here via Model
Route::get('hii', [Usercontroller::class, 'getdata']);


// For Api call in HTTP Client
Route::get('hello', [Usercontroller::class, 'index_data']);

// HTTP request GET
// Route::get('submit',[Usercontroller::class,'testreq']);
// Route::view('new_login','test'); 


// HTTP request POST
// Route::post('submit',[Usercontroller::class,'testreq']);
// Route::view('new_login','test'); 


// HTTP request PUT
// Route::put('submit',[Usercontroller::class,'testreq']);
// Route::view('new_login','test');


// HTTP request DELETE
// Route::delete('submit',[Usercontroller::class,'testreq']);
// Route::view('new_login','test');    


// Session Handler
Route::post('submit', [Usercontroller::class, 'userlogin']);
// Route::view('new_login','test'); 
Route::view('profile', 'profile');
Route::get('/logout', function () {
    if (session()->has('username')) {
        session()->put('username', null);
    }
    return redirect('new_login');
});

Route::get('/new_login', function () {
    if (session()->has('username')) {
        return redirect('profile');
    }
    return view('test');
});

// Flash session
Route::view('store', 'store_user');
Route::post('storecontroller', [Usercontroller::class, 'store']);


// Upload File
Route::view('upload', 'upload');
Route::post('upload', [Usercontroller::class, 'fileupload']);


// Localization
// Route::view('profile1','profile1');
Route::get('/lang/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('lang');
});


// Use Model Controller
// Route::view('list','list');
Route::get('list', [listcontroller::class, 'show']);


// Use Model Controller with pagination
Route::get('list1', [membercontroller::class, 'showlist']);


// Add Form data In Laravel
Route::view('addmember', 'addmember');
Route::post('addmember', [addmembercontroller::class, 'add']);


// Delete Data from Table
// Route::view('delete','delete');
Route::get('list2', [deletecontroller::class, 'list']);
Route::get('delete/{id}', [deletecontroller::class, 'delete']);

// Update data in Table
Route::get('edit/{id}', [deletecontroller::class, 'showdata']);
Route::post('edit/edit',[deletecontroller::class,'update']);


// Insert Update Delete
Route::get('datalist',[users::class,'opration']);


// Aggregate Methods
Route::get('aggregate',[usercontroller2::class,'operation']);


// Joins
Route::get('join',[Employeecontroller::class,'getdata']);