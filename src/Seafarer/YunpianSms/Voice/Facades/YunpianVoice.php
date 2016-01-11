<?php

namespace Seafarer\YunpianSms\Voice\Facades;

use Illuminate\Support\Facades\Facade;

class YunpianVoice extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'yunpian.voice';
    }
}
