<?php

namespace Seafarer\YunpianSms\Sms;

use Seafarer\YunpianSms\CurlTrait;
use Config;

/**
 * api client for http://www.yunpian.com
 */
class SmsClient {
    use CurlTrait;

    /**
     * curl resource handler
     */
    private $ch = '';

    /**
     * api response message
     */
    private $inbox = 'There is nothing...';

    /**
     * client version
     */
    protected $version = 'Sms module v1.0.0';

    /**
     * send smart template sms
     */
    public function send($data)
    {
        $this->setUp()->dispatch($data, Config::get('laravel-yunpian-sms::sms.send_uri'))->shutDown();
        return $this->inbox;
    }

    /**
     * get api module version
     */
    public function getVersion()
    {
        return $this->version;
    }
}

