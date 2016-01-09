<?php namespace Seafarer\YunpianSms;

use Illuminate\Support\ServiceProvider;
use Seafarer\YunpianSms\Account\AccountClient;

class YunpianServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('seafarer/yunpian-sms');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->bind('yunpian.account', function()
        {
            return new AccountClient;
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
