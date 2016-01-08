<?php

namespace Seafarer\YunpianSms\Facades;

use Illuminate\Support\Facades\Facade;

class YunpianSms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'yunpiansms';
    }

}
