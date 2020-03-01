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

Route::get("/", 'indexController@index');
Route::get('/specs','specController@index');
Route::get('stud/{id}','StudController@show');
Route::get('/stud','StudController@index')->name('stud.index');


//Route::group(['prefix' => 'admin'], function () {
//    Voyager::routes();
//});

Auth::routes();

Route::get('/search','indexController@search')->name('search');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/stud','adminController@stud');
Route::get('/admin/group','adminController@group');
Route::get('/admin/spec','adminController@spec');
Route::get('/admin/predmet','adminController@predmet');
Route::get('/admin/ball','adminController@ball');

Route::get('/admin/studdel','adminController@studdel');
Route::get('/admin/groupdel','adminController@groupdel');
Route::get('/admin/specdel','adminController@specdel');
Route::get('/admin/predmetdel','adminController@predmetdel');

Route::get('/admin/studedit','adminController@studedit');
Route::get('/admin/groupedit','adminController@groupedit');
Route::get('/admin/specedit','adminController@specedit');
Route::get('/admin/predmetedit','adminController@predmetedit');

//add
Route::post('/admin/stud/add','adminController@addstud')->name('admin.stud.add');
Route::post('/admin/group/add','adminController@addgroup')->name('admin.group.add');
Route::post('/admin/spec/add','adminController@addspec')->name('admin.spec.add');
Route::post('/admin/predmet/add','adminController@addpredmet')->name('admin.predmet.add');
Route::post('/admin/ball/add','adminController@addball')->name('admin.ball.add');
//delete
Route::delete('/admin/stud/delete','adminController@delstud')->name('admin.stud.del');
Route::delete('/admin/group/delete','adminController@delgroup')->name('admin.group.del');
Route::delete('/admin/spec/delete','adminController@delspec')->name('admin.spec.del');
Route::delete('/admin/predmet/delete','adminController@delpredmet')->name('admin.predmet.del');
//edit
Route::patch('/admin/stud/update','adminController@updatestud')->name('admin.stud.update');
Route::patch('/admin/group/update','adminController@updategroup')->name('admin.group.update');
Route::patch('/admin/spec/update','adminController@updatespec')->name('admin.spec.update');
Route::patch('/admin/predmet/update','adminController@updatepredmet')->name('admin.predmet.update');