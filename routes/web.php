<?php

use Core\Router\Web\Route;

// app routes

Route::get('', 'HomeController@index', 'index');

Route::get('dashboard/categories', 'CategoryController@index', 'index');
