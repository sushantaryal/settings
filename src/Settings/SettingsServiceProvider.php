<?php

namespace Taggers\Settings;

use Taggers\Settings\Models\Setting;
use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadRoutesFrom(__DIR__ . '/routes/admin.php');

		$this->loadMigrationsFrom(__DIR__ . '/../migrations');

		$this->loadViewsFrom(__DIR__ . '/../views', 'settings');

		$this->publishes([
			__DIR__ . '/../migrations' => database_path('migrations'),
		]);
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('settings', function () {
			return Setting::pluck('value', 'name');
		});
	}
}