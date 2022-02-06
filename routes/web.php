<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PlanController;
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

Route::get('/', [WelcomeController::class, 'welcome']);
Route::get('/about', [AboutPageController::class, 'about']);
Route::get('/contact', [ContactController::class, 'contact']);

Route::get('/plan/{id}', [PlanController::class, 'plan_details']);
Route::post('/plan/{id}', [PlanController::class, 'ordering_call']);


Route::get('/admin', [AdminController::class, 'admin'])->middleware('auth');


require __DIR__.'/auth.php';
