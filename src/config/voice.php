<?php

/**
 * 语音api配置相关
 */

$base_uri = Config::get('laravel-yunpian-sms::yunpian.base_uri') . 'voice/';

return array(
    /**
     * 发送语音验证码api
     */
    'send_uri' => $base_uri . 'send.json',

    /**
     * 获取状态报告api
     */
    'pull_status_uri' => $base_uri . 'pull_status.json',

);
