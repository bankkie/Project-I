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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

 Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\HomeController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

    //admin password reset routes
    Route::post('/password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset','Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    



});




 Route::get('admin/volunteer','Admin\HomeController@getVolunteer')->name('admin.volunteer');


//student
Route::get('/member', 'InsertMemberController@index')->name('member.index');
Route::post('/member/insert', 'InsertMemberController@insert')->name('member.insert');
Route::get('/member/edit/{id}', 'InsertMemberController@edit')->name('member.edit');
Route::post('/member/update/{id}', 'InsertMemberController@update')->name('member.update');

Route::get('/member/edituser/{id}', 'InsertMemberController@edituser')->name('member.edituser');
Route::post('/member/updateuser/{id}', 'InsertMemberController@updateuser')->name('member.updateuser');

Route::get('/member/delete/{id}', 'InsertMemberController@delete')->name('member.delete');
Route::post('/searchstd','SearchController@searchstd');

//staff
Route::get('/staff', 'StaffController@index')->name('staff.index');
Route::post('/staff/insert', 'StaffController@insert')->name('staff.insert');
Route::get('/staff/edit/{id}', 'StaffController@edit')->name('staff.edit');
Route::post('/staff/update/{id}', 'StaffController@update')->name('staff.update');
Route::get('/staff/delete/{id}', 'StaffController@delete')->name('staff.delete');
Route::post('/searchstf','SearchController@searchstf');

//PDF

Route::get('member/pdfstd','PDFController@pdfstd');
Route::get('member/pdfstf','PDFController@pdfstf');

Route::get('/member/details/{id}', 'PDFController@pdf_id');
Route::get('/staff/details/{id}', 'PDFController@stfpdf_id');

//Volunteer
Route::get('/ShowVol', 'ShowVolController@index')->name('volunteer.index');
Route::get('/volunteer/edit/{id}', 'ShowVolController@editvol')->name('volunteer.editvol');
Route::post('/volunteer/update/{id}', 'ShowVolController@updatevol')->name('volunteer.updatevol');
Route::get('/volunteer/delete/{id}', 'ShowVolController@delete')->name('volunteer.delete');
Route::get('/volunteer/details/{id}', 'PDFController@pdf_vol');

Route::post('/searchvol','SearchController@searchvol');





Route::get('/InsertStudent','InsertStudentController@getInsertStd') ;
Route::get('/InsertStaff','InsertStaffController@getInsertStf');

Route::get('/AllData','ShowAllDataController@getShowAllData');
Route::get('/StatisticData','ShowAllDataController@getShowStatisticData');
Route::get('/InsertVolunteer','InsertVolunteerController@getInsertVol');
Route::get('/InsertAdmin','InsertAdminController@getInsertAd');
Route::get('/AllStd','ShowStdController@getShowStd');
Route::get('/volunteer','VolunteerController@getVolunteer');
Route::get('/activity','ActivityController@getActivity');
Route::get('/activity2','Activity2Controller@getActivity2');
Route::get('/activity3','Activity3Controller@getActivity3');
Route::get('/activityN1','ActivityN1Controller@getActivityN1');
Route::get('/activityN2','ActivityN2Controller@getActivityN2');


Route::get('/buddy','BuddyController@getBuddy');
Route::post('/searchbuddy','SearchController@searchbuddy');

//help

Route::resource('categories', 'CategoryController');
Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::post('/categories/store', 'CategoryController@store')->name('categories.store');

Route::get('/categories/delete/{id}', 'CategoryController@destroy')->name('categories.destroy');




Route::resource('posts', 'PostController');




//Show user id and member id 

Route::get('/InsertMember','AddMemberControllerr@getInsertMem');
Route::get('InsertMember', 'AddMemberController@viewuserid');


Route::get('InsertStudent', 'InsertStudentController@viewuserid');
Route::get('InsertStaff', 'InsertStaffController@viewuserid');
Route::get('InsertAdmin', 'InsertAdminController@viewuserid');
//Insert
Route::get('insert','AddMemberController@insertform') ;
Route::post('create','AddMemberController@insert') ;

Route::get('insert_vol','InsertVolunteerController@insertform') ;
Route::post('create_vol','InsertVolunteerController@insert') ;


Route::get('insert_std','InsertStudentController@insertform') ;
Route::post('create_std','InsertStudentController@insert') ;

Route::get('insert_stf','InsertStaffController@insertform') ;
Route::post('create_stf','InsertStaffController@insert') ;

Route::get('insert_admin','InsertAdminController@insertform') ;
Route::post('create_admin','InsertAdminController@insert') ;
//Show data

Route::get('MyData','DataUserController@getData');
Route::get('AllData','ShowAllDataController@countAll');
Route::get('StatisticData','ShowAllDataController@countStatistic');

Route::get('AllStd','ShowStdController@countAll');

/*
 * import/export Excel
 */

Route::get('/getImport','ExcelController@getImport');

Route::post('/importExcel','ExcelController@importExcel');

Route::get('/ExportStd','ExcelController@ExportStd');
Route::get('/ExportStf','ExcelController@ExportStf');
Route::get('/deleteAll','ExcelController@deleteAll');
/*
 * Mail
 */
Route::get('/sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');

Route::get('/InsertNews','InsertNewsController@insertNews');
Route::post('upload', 'InsertNewsController@upload');
Route::get('/activity','InsertNewsController@showNews');


Route::get("file", 'NewsController@index');
Route::post("store", 'NewsController@store');

Route::get("show", 'NewsController@showall');
Route::post('/searchac','SearchController@searchac');




Route::get("announce", 'AnnounceController@index');
Route::post("storenews", 'AnnounceController@storenews');
Route::get("shownews", 'AnnounceController@showall');

//Route::post("store", 'ActivityController@store');

//Route::get("show", 'ActivityController@showall');