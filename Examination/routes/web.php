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

Route::get('/help', function () {
    return view('welcome');
});

Route::get('/', ["as"=>"home", "uses"=>"HomeController@index"]);

//Exam Controller
Route::get("exams", ["as"=>"exams", "uses"=>"ExamController@getAll"]);
Route::get("exam/{examId}", ["as"=>"examDetail", "uses"=>"ExamController@getById"]);
Route::get("add-exam", ["as"=>"addExam", "uses"=>"ExamController@addExam"]);
Route::post("insert-exam", ["as"=>"insertExam", "uses"=>"ExamController@insertExam"]);
Route::get("hidden-exam/{examId}", ["as"=>"hiddenExam", "uses"=>"ExamController@hiddenExam"]);
Route::get("active-exam/{examId}", ["as"=>"activeExam", "uses"=>"ExamController@activeExam"]);

//Question Controller
Route::post("insert-question", ["as"=>"insertQuestion", "uses"=>"QuestionController@insertQuestion"]);

// User Controller
Route::get("register", ["as"=>"register", "uses"=>"UserController@register"]);
Route::post("insert-user", ["as"=>"insertUser", "uses"=>"UserController@insertUser"]);