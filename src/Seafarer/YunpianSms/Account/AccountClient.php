<?php

namespace Seafarer\YunpianSms\Account;

use Seafarer\YunpianSms\CurlTrait;
use Config;

/**
 * api client for http://www.yunpian.com
 */
class AccountClient {
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
    protected $version = 'Account module v1.0.0';

    /**
     * get user info
     */
    public function getAccount($data)
    {
        $this->setUp()->dispatch($data, Config::get('yunpian-sms::account.get_uri'))->shutDown();
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

