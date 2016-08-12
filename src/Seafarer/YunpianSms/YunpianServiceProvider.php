<?php namespace Seafarer\YunpianSms;

use Illuminate\Support\ServiceProvider;
use Seafarer\YunpianSms\Account\AccountClient;
use Seafarer\YunpianSms\Sms\SmsClient;
use Seafarer\YunpianSms\Voice\VoiceClient;

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
		$this->package('seafarer/laravel-yunpian-sms');
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

        $this->app->bind('yunpian.sms', function()
        {
            return new SmsClient;
        });

        $this->app->bind('yunpian.template', function()
        {
            return new TemplateClient;
        });

        $this->app->bind('yunpian.voice', function()
        {
            return new VoiceClient;
        });

        $this->app->booting(function () {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('YunpianAccount', 'Seafarer\YunpianSms\Account\Facades\YunpianAccount');
            $loader->alias('YunpianSms', 'Seafarer\YunpianSms\Sms\Facades\YunpianSms');
            $loader->alias('YunpianTemplate', 'Seafarer\YunpianSms\Template\Facades\YunpianTemplate');
            $loader->alias('YunpianVoice', 'Seafarer\YunpianSms\Voice\Facades\YunpianVoice');
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
