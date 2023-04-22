<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OptionsController;
use App\Http\Controllers\RealEstateController;
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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('/admin')
     ->name('admin.')
     ->group(function () {
         Route::get('/', [AdminController::class, 'index'])
              ->name('index')
         ;

         Route::prefix('/options')
              ->name('options.')
              ->controller(OptionsController::class)
              ->group(function () {
                  // CRUD
                  Route::get('/', 'index')
                       ->name('index')
                  ;
                  Route::get('/create', 'create')
                       ->name('create')
                  ;
                  Route::post('/create', 'store')
                       ->name('store')
                  ;
                  Route::get('/show/{option}', 'show')
                       ->name('show')
                  ;
                  Route::get('/edit/{option}', 'edit')
                       ->name('edit')
                  ;
                  Route::patch('/edit/{option}', 'update')
                       ->name('update')
                  ;
                  Route::delete('/delete/{option}', 'destroy')
                       ->name('destroy')
                  ;
              })
         ;

         Route::prefix('/realEstates')
              ->name('realEstates.')
              ->controller(RealEstateController::class)
              ->group(function () {
                  // CRUD
                  Route::get('/', 'index')
                       ->name('index')
                  ;
                  Route::get('/create', 'create')
                       ->name('create')
                  ;
                  Route::post('/create', 'store')
                       ->name('store')
                  ;
                  Route::get('/show/{realEstate}', 'show')
                       ->name('show')
                  ;
                  Route::get('/edit/{realEstate}', 'edit')
                       ->name('edit')
                  ;
                  Route::patch('/edit/{realEstate}', 'update')
                       ->name('update')
                  ;
                  Route::delete('/delete/{realEstate}', 'destroy')
                       ->name('destroy')
                  ;
              })
         ;
     })
;
