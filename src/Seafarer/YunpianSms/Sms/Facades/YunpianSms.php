<?php

namespace Seafarer\YunpianSms\Sms\Facades;

use Illuminate\Support\Facades\Facade;

class YunpianSms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'yunpian.sms';
    }
}
