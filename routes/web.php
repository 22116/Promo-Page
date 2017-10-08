<?php

Route::get('/', 'Home@index');
Route::prefix('university')->group(function () {
	Route::get('/{lesson?}', 'University@lesson');
	Route::get('/{lesson}/{number}/{section?}', ['uses' => 'University@lab'])->where('section', 'description|data|result');
});

