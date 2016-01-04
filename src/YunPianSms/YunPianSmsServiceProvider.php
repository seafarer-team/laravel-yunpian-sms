<?php

namespace Seafarer\YunPianSms;

use Illuminate\Container\Container;
use Illuminate\Support\ServiceProvider;

class YuanPianSmsServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind('yunpiansms', function()
        {
            return new YunPianSmsClient;
        });
    }
}
