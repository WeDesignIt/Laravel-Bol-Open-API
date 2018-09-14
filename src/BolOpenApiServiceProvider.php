<?php

namespace WeDesignIt\LaravelBolOpenApi;

use BolCom\Client;
use Illuminate\Support\ServiceProvider;

class BolOpenApiServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
			__DIR__ . '/config/bol-open-api.php' => config_path('bol-open-api.php'),
		]);
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
}
