<?php

namespace WeDesignIt\LaravelBolOpenApi;

use BolCom\Client;
use Illuminate\Support\ServiceProvider;

class BolOpenApiServiceProvider extends ServiceProvider
{

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$configPath = __DIR__ . '/../config/bol-open-api.php';
		$this->publishes([$configPath => config_path('bol-open-api.php'),], 'config');

		// use the vendor configuration file as fallback
		$this->mergeConfigFrom(
			$configPath, 'bol-open-api'
		);
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(Client::class, function(){
			// access key, response format, debug mode
			return new Client(
				config('bol-open-api.access-key'),
				config('bol-open-api.response-format'),
				config('bol-open-api.debug')
			);
		});
		$this->app->alias(Client::class, 'bol-open-api');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['bol-open-api',];
	}
}
