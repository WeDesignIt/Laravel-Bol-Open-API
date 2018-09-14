# Laravel Bol Open API connector

You can publish the config and view files into your project by running:

```bash
$ php artisan vendor:publish --provider "WeDesignIt\BolOpenApiServiceProvider"
```

For Laravel >=5.5, no need to manually add the `BolOpenApiServiceProvider` into the app config. It uses package auto discovery feature. Skip this if you are on >=5.5, if not:

Open your `AppServiceProvider` (located in `app/Providers`) and add this line in `register` function
```php
$this->app->register(\WeDesignIt\BolOpenApiServiceProvider::class);
```
or open your `config/app.php` and add this line in `providers` section
```php
WeDesignIt\BolOpenApiServiceProvider::class,