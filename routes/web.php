<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

/* Home */
Route::get('/', 'RecipesController@index')->name('recipes.index');

/* Recipes */
Route::get('/recipes', 'RecipesController@overview')->name('recipes.overview');
Route::get('/recipes/{recipe}', 'RecipesController@show')->name('recipes.show');

/* Contact */
Route::get('/contact','ContactFormController@create')->name('contact.create');
Route::post('/contact', 'ContactFormController@store')->name('contact.store');