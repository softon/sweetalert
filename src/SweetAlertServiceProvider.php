<?php namespace Softon\SweetAlert;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class SweetAlertServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->singleton('softon.sweetalert', 'Softon\SweetAlert\SweetAlert');
	}


    public function boot(){
    	$this->loadViewsFrom(__DIR__.'/views', 'sweetalert');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/sweetalert'),
            __DIR__.'/config/sweetalert.php' => config_path('sweetalert.php'),
        ]);
    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [

        ];
	}

}
