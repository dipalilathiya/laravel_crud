<?php
use App\Http\Controllers\admincontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view',[admincontroller::class ,'view'])->name('view');
Route::post('/create' ,[admincontroller::class, 'create'])->name('create');
