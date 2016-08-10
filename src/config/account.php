<?php

/**
 * 账户api配置相关
 */

$base_uri = Config::get('laravel-yunpian-sms::yunpian.base_uri') . 'user/';

return array(
    /**
     * 查看账户信息api
     */
    'get_uri' => $base_uri . 'get.json',

    /**
     * 修改账户信息api
     */
    'set_uri' => $base_uri . 'set.json',
);
