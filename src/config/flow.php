<?php

/**
 * 流量api配置相关
 */

$base_uri = Config::get('laravel-yunpian-sms::yunpian.base_uri') . 'flow/';

return array(
    /**
     * 查询流量包api
     */
    'get_package_uri' => $base_uri . 'get_package.json',

    /**
     * 充值流量api
     */
    'recharge_uri' => $base_uri . 'recharge.json',

    /**
     * 获取状态报告api
     */
    'pull_status_uri' => $base_uri . 'pull_status.json',

);
