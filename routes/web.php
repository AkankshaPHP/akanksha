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
// to check service provide we do here die n dump:
//dd(app()->make('Hello'));
Route::get('/hello', function () {
   echo "hello view";
})->middleware('test'); 

Route::get('/', function () {
   return view('welcome');
}); 
Route::get('/logout', 'Admin@logout');
Route::get('/admin', 'Admin@index');
Route::get('/admin/exam_category', 'Admin@exam_category');
Route::post('/admin/add_new_category', 'Admin@add_new_category');
Route::get('/admin/delete_category/{id}', 'Admin@delete_category');
Route::get('/admin/edit_category/{id}', 'Admin@edit_category');
Route::post('admin/edit_new_category', 'Admin@edit_new_category');
Route::get('/admin/category_status/{id}', 'Admin@category_status');
Route::get('/admin/manage_exam', 'Admin@manage_exam');
Route::post('/admin/add_new_exam', 'Admin@add_new_exam');
Route::get('/admin/exam_status/{id}', 'Admin@exam_status');
Route::get('/admin/delete_exam/{id}', 'Admin@delete_exam');
Route::get('/admin/edit_exam/{id}', 'Admin@edit_exam');
Route::post('/admin/edit_new_exam', 'Admin@edit_new_exam');
Route::get('/admin/manage_students', 'Admin@manage_students');
Route::post('/admin/add_new_students', 'Admin@add_new_students');
Route::get('/admin/student_status/{id}', 'Admin@student_status');
Route::get('/admin/edit_students/{id}', 'Admin@edit_students');
Route::post('admin/edit_new_students', 'Admin@edit_new_students');
Route::get('/admin/delete_students/{id}', 'Admin@delete_students');

Route::get('/admin/manage_portal', 'Admin@manage_portal');
Route::post('admin/add_new_portal', 'Admin@add_new_portal');
Route::get('/admin/edit_portal/{id}', 'Admin@edit_portal');
Route::post('/admin/edit_new_portal', 'Admin@edit_new_portal');
Route::get('/admin/portal_status/{id}', 'Admin@portal_status');
Route::get('/admin/delete_portal/{id}', 'Admin@delete_portal');
Route::get('/admin/add_question/{id}', 'Admin@add_question');
Route::post('/admin/add_new_question', 'Admin@add_new_question');
Route::get('/admin/logout', 'Admin@logout');


// Portal
Route::get('/portal/portal_signup', 'PortalController@portal_signup');
Route::post('/portal/signup_sub', 'PortalController@signup_sub');
Route::get('/portal/login', 'PortalController@login');
Route::post('/portal/login_sub', 'PortalController@login_sub');
Route::get('/portal/dashboard', 'PortalOperation@dashboard');
Route::get('/portal/exam_form/{id}', 'PortalOperation@exam_form');
Route::post('/portal/exam_form_submit', 'PortalOperation@exam_form_submit');
Route::get('/portal/print/{id}', 'PortalOperation@print');
Route::get('/portal/update_result', 'PortalOperation@update_result');
Route::get('/portal/student_exam_info', 'PortalOperation@student_exam_info');
Route::post('/portal/student_exam_form_edit', 'PortalOperation@student_exam_form_edit');
Route::get('/portal/logout', 'PortalOperation@logout');

//Student
Route::get('/student/student_signup', 'StudentController@student_signup');
Route::post('/student/login_sub', 'StudentController@login_sub');
Route::get('/student/dashboard2', 'StudentOperation@dashboard2');
Route::get('/student/logout', 'StudentOperation@logout');
Route::get('/student/exam', 'StudentOperation@exam');
Route::get('/student/join_exam', 'StudentOperation@join_exam');
Route::post('/student/submit_form', 'StudentOperation@submit_form');
Route::get('/student/result', 'StudentOperation@result');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
