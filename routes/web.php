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
//================ User ====================

//================ Home ====================
Route::get('/', 'MainController@index');
//================ /Home ===================

//================ /Dept ===================
Route::get('department/{id}', 'Department\DepartmentController@index');
Route::get('faculty/all/{id}', 'Department\DepartmentController@allFaculty');
Route::get('faculty/search/{id}', 'Department\DepartmentController@facultySearch');
Route::get('faculty/course/{id}', 'Department\DepartmentController@coursedetails');


Route::get('course/all/{id}', 'Department\DepartmentController@all_courses');
Route::get('course/semester/{id}/{semID}', 'Department\DepartmentController@semester_course');
Route::get('course/search/{id}', 'Department\DepartmentController@courseSearch');
//================ /Dept ===================

//================ /User ===================
Route::group(['middleware' => 'auth'], function () {
//================ /Admin ===================

Route::group(['middleware' => ['admin']], function () {
//================ Home =====================
Route::get('admin', 'AdminController@index');
//================ /Home ====================

//================= Department ==============
    Route::get('admin/department', 'Admin\Department\DepartmentController@index');
    Route::post('admin/department/save', 'Admin\Department\DepartmentController@save');
    Route::post('admin/department/edit', 'Admin\Department\DepartmentController@edit');
    Route::get('admin/department/del/{id}', 'Admin\Department\DepartmentController@del');
//================= /Department =============

//================= Faculty ==================
    Route::get('admin/faculty','Admin\Faculty\FacultyController@index');
    Route::post('admin/faculty/save','Admin\Faculty\FacultyController@save');
    Route::post('admin/faculty/edit','Admin\Faculty\FacultyController@edit');
    Route::get('admin/faculty/del/{id}','Admin\Faculty\FacultyController@del');
//================ /Faculty ===================

//================= Semester ==================
    Route::get('admin/semester','Admin\Semester\SemesterController@index');
    Route::post('admin/semester/save','Admin\Semester\SemesterController@save');
    Route::post('admin/semester/edit','Admin\Semester\SemesterController@edit');
    Route::get('admin/semester/del/{id}','Admin\Semester\SemesterController@del');
//================ Semester ===================

//================ Course  ================== 
Route::get('admin/course','Admin\Course\CourseController@index');
Route::post('admin/course/save','Admin\Course\CourseController@save');
Route::post('admin/course/edit','Admin\Course\CourseController@edit');
Route::get('admin/course/del/{id}','Admin\Course\CourseController@del');
//================ Course  ================== 
//================ Course-Details  ================== 
Route::get('admin/course_details','Admin\Course_details\Course_detailsController@index');
Route::post('admin/course_details/save','Admin\Course_details\Course_detailsController@save');
Route::post('admin/course_details/edit','Admin\Course_details\Course_detailsController@edit');
Route::get('admin/course_details/del/{id}','Admin\Course_details\Course_detailsController@del');
//================ Course-Details  ================== 
//============== User ==================
    Route::get('admin/user', 'Admin\User\UserController@index');
    Route::post('admin/user/edit', 'Admin\User\UserController@edit');
    Route::get('admin/user/del/{id}', 'Admin\User\UserController@del');
//============== /User =================

//================ /Admin ===================

  });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
