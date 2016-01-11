<?php

namespace Seafarer\YunpianSms\Voice;

use Seafarer\YunpianSms\CurlTrait;
use Config;

/**
 * api client for http://www.yunpian.com
 */
class VoiceClient {
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
    protected $version = 'Voice module v1.0.0';

    /**
     * send voice
     */
    public function send($data)
    {
        $this->setUp()->dispatch($data, Config::get('yunpian-sms::voice.send_uri'))->shutDown();
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

