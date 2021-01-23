<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KidSectionController;
use App\Http\Controllers\TeenSectionController;
use App\Http\Controllers\PsychologistController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\StoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
| Here is the route of index of the proyect.
*/

Route::get('/', [HomeController::class,'Home'])->name('home');

/*
|--------------------------------------------------------------------------
| Kids Routes
|--------------------------------------------------------------------------
| Here are all the routes about the Kids Section, all of this routes is
| controlled for KidSectionController.
*/

Route::get('/kids', [KidSectionController::class,'home'])->name('kids.home');
Route::get('/kids/stories', [KidSectionController::class,'stories'])->name('kids.stories');
Route::get('/kids/story/{id}', [KidSectionController::class,'story'])->name('kids.story');
Route::get('/kids/paints', [KidSectionController::class,'paints'])->name('kids.paints');

/*
|--------------------------------------------------------------------------
| Teen Routes
|--------------------------------------------------------------------------
| Here are all the routes about the Teen Section, all of this routes is
| controlled for TeenSectionController.
*/

Route::get('/teens', [TeenSectionController::class,'Teens'])->name('teens.home');

/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
|
| Here are all the routes of the 2 admin sections, each admin section is for
| a different role of user, the first role is psychologist, this is for the "psychologists"
| in general and the second admin section is for the role "admin" this is for the general
| admins of the platform similar to root user, to control the access of 2 admin sections
| of the project, it have 2 middlewares, the fist middleware filter the general routes of the
| admin sections, that is the common routes of the roles, and the second middleware filters the routes
| that just the role admin can open.
|
*/

Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Auth-psychologist
|--------------------------------------------------------------------------
| This middleware filter the general routes of the
| admin sections, that is the common routes of the roles.
*/

Route::group(['middleware' => 'auth-psychologist'], function ()
{
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    /*
    |--------------------------------------------------------------------------
    | Resource Story -> Here are all the routes about the resource "Story" for both section admins.
    |--------------------------------------------------------------------------
    */
    Route::resource('stories', StoryController::class)
    ;
});

/*
|--------------------------------------------------------------------------
| Auth-admin
|--------------------------------------------------------------------------
| This middleware filters the routes that just the role admin can open,
| only the role admin can create new psychologists and chooses their role.
*/

Route::group(['middleware' => 'auth-admin'], function ()
{
    Route::get('/dashboard-admin', [DashboardAdminController::class, 'index'])->name('dashboard-admin');
    /*
    |--------------------------------------------------------------------------
    | Resource Psychologist -> Here are all the routes about the resource 'psychologist'
    |                          for the admin section admin.
    |--------------------------------------------------------------------------
    */
    Route::resource('psychologists', PsychologistController::class);
});