<?php

namespace Seafarer\YunPianSms\Facades;

use Illuminate\Support\Facades\Facade;

class YuanPianSms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'yunpiansms';
    }

}
