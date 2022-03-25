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


Route::get('/', 'HomeController@index');

Route::get('/test', function () {
    return view('example');   
});

Route::get('/subject','UserController@subject');
Auth::routes();

Route::group(['prefix' => 'admin','middleware' =>'auth'], function () {
    Route::get('/','AdminController@index');

    Route::get('/users', 'UserController@index');
    Route::get('/roles', 'RoleController@index');
    Route::get('/users/{id}/edit', 'UserController@edit');
    Route::post('/users/{id}/update', 'UserController@update');

    Route::get('/grades','GradeController@create');
    Route::post('/grades', 'GradeController@store');

    Route::get('/subjects', 'SubjectController@create');
    Route::post('/subjects', 'SubjectController@store');

    Route::get('/teachers', 'TeacherController@create');
    Route::post('/teachers','TeacherController@store');

    Route::get('/chapter','ChapterController@index');
    Route::get('/{id}/chapter_details', 'ChapterController@create' );
    Route::post('/{id}/chapter_details', 'ChapterController@store' );
    //Route::get('/chapter/myanmar', 'ChapterController@createMyanmar');
 
    Route::get('/{id}/lecture','LectureController@create');
     Route::post('/{id}/lecture','LectureController@store');
     Route::get('/lecture/{id}/edit', 'LectureController@edit');
      Route::post('/lecture/{id}/update', 'LectureController@update');

    Route::get('/add_question/{id}','AdminController@add_question');
    Route::post('/add_question/{id}','AdminController@add_new_question');
  Route::post('/question_status/{id}','AdminController@question_status');

    Route::get('/update_question/{id}', 'AdminController@edit_question');
    Route::post('/update_question_detail/{id}', 'AdminController@update');
    Route::get('/delete_question/{id}', 'AdminController@delete_question');


});

Route::group(['prefix' => 'learning' , 'middleware' => 'auth'], function () {
    Route::get('/', 'StudentController@index');
    Route::get('/learn','StudentController@learn');
    Route::get('/chapter/{id}' ,'StudentController@chapter') -> name('chapter');
    // Route::get('/grade 11', 'StudentController@indexGrade11');
    Route::get('/{id}/lecture', 'StudentController@lecture');
    Route::get('/{id}/exam' , 'StudentController@exam');
    Route::post('/submit_question','StudentController@submit_question');

    Route::get('/{id}/results','StudentController@view_result');

    Route::get('/order', 'OrderCotroller@store');
    Route::get('/cart' ,    'OrderCotroller@cart')->name('cart');
    Route::get('/add-to-cart/{id}' , 'OrderCotroller@add') -> name('add');
    //Route::get('/remove/{id}' , 'OrderCotroller@destroy');
    Route::get('/remove/{id}', 'OrderCotroller@remove') -> name('remove');
    //Route::get('/{id}/lecture_detail','StudentController@lecture_detail');
});


