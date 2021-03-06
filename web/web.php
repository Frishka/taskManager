<?php use \Web\Route;

Route::get('/','MainController','index');
Route::get('/create','MainController','createTask');
Route::post('/create/data','CRUDController','create');

Route::get('/login','AuthController','login');
Route::post('/auth','AuthController','auth');
Route::post('/logout','AuthController','logout');
Route::get('/register','AuthController','register');
Route::get('/registration','AuthController','registration');

Route::get('/admin','AdminController','index');
Route::get('/admin/login','AdminController','login');
Route::get('/admin/logout','AdminController','logout');
Route::get('/admin/data','CRUDController','update');