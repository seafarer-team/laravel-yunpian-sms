<?php

namespace Seafarer\YunpianSms\Account\Facades;

use Illuminate\Support\Facades\Facade;

class YunpianAccount extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'yunpian.account';
    }

}
