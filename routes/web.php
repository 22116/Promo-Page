<?php

Route::get('/', 'Home@index')->name('home');

Route::group(['prefix' => 'university', 'middleware' => ['university']], function () {
	Route::get('/', 'University@lesson')->name('university');
	Route::get('/{lesson}', 'University@lesson')->name('lesson');
	Route::get('/{lesson}/{number}/{section?}', ['uses' => 'University@lab'])->name('lab');
});

