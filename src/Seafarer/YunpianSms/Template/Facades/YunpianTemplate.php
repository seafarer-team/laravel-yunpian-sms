<?php

namespace Seafarer\YunpianSms\Template\Facades;

use Illuminate\Support\Facades\Facade;

class YunpianTemplate extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'yunpian.template';
    }
}
