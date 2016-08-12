<?php

namespace Seafarer\YunpianSms\Template;

use Seafarer\YunpianSms\CurlTrait;
use Config;

/**
 * api client for http://www.yunpian.com
 */
class TemplateClient {
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
    protected $version = 'Template module v1.0.0';

    /**
     * add template
     */
    public function add($data)
    {
        $this->setUp()->dispatch($data, Config::get('laravel-yunpian-sms::template.add_uri'))->shutDown();
        return $this->inbox;
    }

    /**
     * get template(s)
     */
    public function get($data)
    {
        $this->setUp()->dispatch($data, Config::get('laravel-yunpian-sms::template.get_uri'))->shutDown();
        return $this->inbox;
    }

    /**
     * update template
     */
    public function update($data)
    {
        $this->setUp()->dispatch($data, Config::get('laravel-yunpian-sms::template.update_uri'))->shutDown();
        return $this->inbox;
    }

    /**
     * del template
     */
    public function del($data)
    {
        $this->setUp()->dispatch($data, Config::get('laravel-yunpian-sms::template.del_uri'))->shutDown();
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

