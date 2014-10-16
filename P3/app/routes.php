<?php

// Homepage
Route::get('/', function()
{
	return View::make('index');
});
// Show form Lorem Ipsum Generator
Route::get('/Lorem', function() {

   return View::make('lorem');

});

// Process form to generate paragraphs
Route::post('/Lorem', function() {
	return "Lorem Posted";

});

// Show form User Generator
Route::get('/User', function() {

   return View::make('user');

});

// Process form to generate User
Route::post('/User', function() {
return "user Posted";

});