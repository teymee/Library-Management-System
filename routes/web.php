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

                    //WEBSITE CONTROLLERS
Route::get('/',         'WebsiteController@index');
Route::get('/catalog',  'WebsiteController@catalog');
Route::get('/library',  'WebsiteController@library');
Route::get('/contact',  'WebsiteController@contact');
Route::get('/book_details/{name}',  'WebsiteController@bookDetail');
Route::post('/library_search',  'WebsiteController@search');
Route::post('/sug_box',  'SugBoxController@store');


//Route::get('/', function () {
//    return view('welcome');
//});

                     //ADMIN CONTROLLER
Route::get('/admin',                    'AdminController@index')->middleware('auth');
Route::post('/search',                  'SearchController@index')->middleware('auth');
Route::get('/sug_box',                  'SugBoxController@index')->middleware('auth', 'can:allowLib');
Route::delete('/delete/{sug_box}',     'SugBoxController@destroy')->middleware('auth', 'can:allowLib');


                        //LIBRARIAN'S DASHBOARD
Route::get('/users',                    'LibController@allUsers')->middleware('auth', 'can:allowLib');
Route::get('/librarians',               'LibController@allLibs')->middleware('auth', 'can:allowLib');
Route::put('/changeStatus/{id}',        'LibController@changeStatus')->middleware('auth', 'can:allowLib');



                                //CATEGORY CONTROLLER
Route::get('/add_category',             'CategoryController@index')->middleware('auth', 'can:allowLib');
Route::post('/add_category',            'CategoryController@store')->middleware('auth', 'can:allowLib');

                                //BOOK CONTROLLER
Route::get('/add_book',                 'BookController@index')->middleware('auth', 'can:allowLib');
Route::get('/edit/{book}',              'BookController@edit')->middleware('auth', 'can:allowLib');
Route::post('/add_book',                'BookController@store')->middleware('auth', 'can:allowLib');
Route::put('/update_book/{book}',       'BookController@update')->middleware('auth', 'can:allowLib');
Route::get('/books',                    'BookController@show')->middleware('auth', 'can:allowLib');


                                 //LIBRARIAN REQUEST
Route::get('/pending_requests',         'RequestsController@pendingRequests')->middleware('auth', 'can:allowLib');
Route::get('/accept/{id}',              'RequestsController@acceptRequestForm')->middleware('auth', 'can:allowLib');
Route::post('/accept_request/{id}',     'RequestsController@acceptRequest')->middleware('auth', 'can:allowLib');
Route::get('/decline/{id}',             'RequestsController@declineRequestForm')->middleware('auth', 'can:allowLib');
Route::post('/decline_request/{id}',    'RequestsController@declineRequest')->middleware('auth', 'can:allowLib');
Route::get('/accepted_request',         'RequestsController@acceptedRequest')->middleware('auth', 'can:allowLib');
Route::get('/return/{id}',              'RequestsController@returnBook')->middleware('auth', 'can:allowLib');
Route::get('/declined_request',         'RequestsController@declinedRequest')->middleware('auth', 'can:allowLib');
Route::get('/returned_books',           'RequestsController@returnedBooks')->middleware('auth', 'can:allowLib');

                                //USER REQUESTS
Route::post('/requests',                'RequestsController@addDash')->middleware('auth', 'can:allowUser');
Route::get('/my_books',                 'RequestsController@myBooks')->middleware('auth', 'can:allowUser');
Route::get('/pending',                  'RequestsController@pending')->middleware('auth', 'can:allowUser');
Route::delete('/delete/{requests}',     'RequestsController@destroy')->middleware('auth', 'can:allowUser');
Route::get('/accepted_books',           'RequestsController@acceptedBooks')->middleware('auth', 'can:allowUser');
Route::get('/declined_books',           'RequestsController@declinedBooks')->middleware('auth', 'can:allowUser');
Route::get('/submitted_books',          'RequestsController@submittedBooks')->middleware('auth', 'can:allowUser');
                                //CHANGE STATUS
Route::put('/status',                   'RequestsController@status')->middleware('auth');



                                 //DASHBOARD PROFILE
Route::get('/profile',                  'ProfileController@index')->middleware('auth');
Route::get('/settings',                 'ProfileController@settings')->middleware('auth');
Route::put('/update_profile/{user}',    'ProfileController@update')->middleware('auth');
Route::put('/update_settings/{user}',     'ProfileController@updateSettingPic')->middleware('auth');
Route::put('/update_password/{user}',     'ProfileController@updatePassword')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
