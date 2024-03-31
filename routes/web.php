<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'layouts/Dashboard');
Route::view('admin/dashboard', 'layouts/Dashboard')->name('dashboard');
Route::view('admin/project-work', 'layouts/ProjectWork')->name('project-work');
Route::view('admin/new-ideas', 'layouts/NewIdeas')->name('new-ideas');
Route::view('admin/team-task', 'layouts/TeamTask')->name('team-task');
Route::view('admin/vistior-activity', 'layouts/VistiorActivity')->name('vistior-activity');
Route::view('admin/school-complain', 'layouts/SchoolComplain')->name('school-complain');
Route::view('admin/meetings-record', 'layouts/MeetingsRecord')->name('meetings-record');
Route::view('admin/expenses', 'layouts/Expenses')->name('expenses');
Route::view('admin/income', 'layouts/Income')->name('income');
Route::view('admin/schools-survey', 'layouts/SchoolsSurvey')->name('schools-survey');
Route::view('admin/software-survey', 'layouts/SoftwareSurvey')->name('software-survey');





