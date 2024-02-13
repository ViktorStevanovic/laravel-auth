<?php

use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware('auth')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {

        Route::get('/projects/deleted', [AdminProjectController::class, 'deletedProjects'])->name('projects.deleted');
        Route::patch('/projects/deleted/{project}', [AdminProjectController::class, 'restoreProject'])->name('projects.restore');

        Route::resource('/projects', AdminProjectController::class);
    });
