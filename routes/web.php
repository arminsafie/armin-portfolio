<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::group(["prefix"=>"admin","as"=>"admin."],function (){
//     Route::resource("article",\App\Http\Controllers\ArticleController::class)->except("show");
//     Route::resource("faq",\App\Http\Controllers\FaqController::class)->except("show");
//     Route::resource("project",\App\Http\Controllers\ProjectController::class)->except("show");
//     Route::resource("resume",\App\Http\Controllers\ResumeController::class)->except("show");
//     Route::resource("skill",\App\Http\Controllers\SkillController::class)->except("show");
//     Route::post('contact',[\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
//     Route::get('contact',[\App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
// });

// Route::get('/', function () {
//     return view("admin.dashboard");
// });
// Route::group(['middleware' => 'guest'], function () {
//     Route::get('register', [\App\Http\Controllers\AuthControllers::class, 'showRegisterForm'])->name('register.form');
//     Route::post('register', [\App\Http\Controllers\AuthControllers::class, 'registerPost'])->name('register.action');
//     Route::get('login', [\App\Http\Controllers\AuthControllers::class, 'showLoginForm'])->name('login.form');
//     Route::post('login', [\App\Http\Controllers\AuthControllers::class, 'loginPost'])->name('login.action');
// });

//user
// Route::group(['prefix'=>'user','as'=>'user.'],function (){
//     Route::get('index', [\App\Http\Controllers\UserController::class,"index"])->name('index');
//     Route::get("resume", [\App\Http\Controllers\UserController::class,"resume"])->name("resume");
//     Route::get("project", [\App\Http\Controllers\UserController::class,"projects"])->name("project");
//     Route::get("contact", [\App\Http\Controllers\UserController::class,"contact"])->name("contact");
// });



Route::get("/",[UserController::class,"index"])->name("index");
Route::get("resume",[UserController::class,"resume"])->name("resume");
Route::get("project", [UserController::class,"projects"])->name("project");
Route::get("contact", [UserController::class,"contact"])->name("contact");
Route::post('contact',[ContactController::class, 'store'])->name('contact.store');