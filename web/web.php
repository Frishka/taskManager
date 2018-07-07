<?php use \Web\Route;

Route::get('/','MainController','index');
Route::get('/secondPage','MainController','foo');