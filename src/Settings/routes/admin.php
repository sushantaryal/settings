<?php

Route::group([
	'prefix'     => 'admin',
	'middleware' => ['web', 'auth'],
	'namespace'  => 'Taggers\Settings\Controllers'
], function () {
	Route::get('settings', 'SettingsController@index')->name('settings.index');
	Route::post('settings', 'SettingsController@update')->name('settings.update');
});