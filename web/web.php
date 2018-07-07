<?php use \Web\Route;

Route::get('/','MainController','index');
Route::get('/create','MainController','createTask');