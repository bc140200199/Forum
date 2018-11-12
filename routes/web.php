<?php

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
	$forums=App\Forum::paginate(15);
    return view('welcome', compact('forums'));
})->name('home');



// Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/forum', 'ForumController');
Route::resource('forum.thread', 'ThreadController');
Route::resource('forum.thread.comment', 'CommentController');
Route::post('comment/create/{thread}', 'CommentController@addThreadComment')->name('threadcomment.store');

// Route::get('/', function () {
// 	$threads=App\Thread::paginate(15);
//     return view('welcome', compact('threads'));
// });


// Route::get('/register', 'RegistrationController@create');

// Route::post('/register', 'RegistrationController@store');

 

// Route::get('/login', [ 'uses' => 'SessionsController@create', 'as' => 'login' ]);

// Route::post('/login', [ 'uses' => 'SessionsController@store', 'as' => 'login' ]);

Route::get('/logout','SessionsController@destroy');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@admin');
    Route::resource('admin/forum', 'Admin/ForumController');
    
});