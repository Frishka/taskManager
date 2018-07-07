<?php use \Web\Route;

Route::get('/','MainController','index');
Route::get('/create','MainController','createTask');

Route::get('/login','AuthController','login');
Route::get('/register','AuthController','register');