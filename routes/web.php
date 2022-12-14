<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\TodoCreate;
use App\Http\Livewire\TodoList;
use App\Http\Livewire\TodoShow;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/todos/create", TodoCreate::class)->name("todos.create");
Route::get("/todos", TodoList::class)->name("todos");
Route::get("/todos/{todo}", TodoShow::class)->name("todos.show");