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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/InsertMember','InsertMemberController@getInsertMem');
Route::get('/InsertStudent','InsertStudentController@getInsertStd') ;
Route::get('/InsertStaff','InsertStaffController@getInsertStf');
Route::get('/MyData','DataUserController@getMyData');
Route::get('/AllData','ShowAllDataController@getShowAllData');


//Show user id and member id
Route::get('InsertMember', 'InsertMemberController@viewuserid');
Route::get('InsertStudent', 'InsertStudentController@viewuserid');
Route::get('InsertStaff', 'InsertStaffController@viewuserid');
//Insert
Route::get('insert','InsertMemberController@insertform') ;
Route::post('create','InsertMemberController@insert') ;

Route::get('insert_std','InsertStudentController@insertform') ;
Route::post('create_std','InsertStudentController@insert') ;

Route::get('insert_stf','InsertStaffController@insertform') ;
Route::post('create_stf','InsertStaffController@insert') ;
//Show data
Route::get('MyData','DataUserController@getData');
Route::get('AllData','ShowAllDataController@countStatus');
