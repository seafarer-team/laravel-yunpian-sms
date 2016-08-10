<?php

/**
 * 账户api配置相关
 */

$base_uri = Config::get('laravel-yunpian-sms::yunpian.base_uri') . 'sms/';

return array(
    /**
     * 智能匹配模板发送api
     */
    'send_uri' => $base_uri . 'send.json',

    /**
     * 获取状态报告api
     */
    'pull_status_uri' => $base_uri . 'pull_status.json',

    /**
     * 获取回复短信api
     */
    'pull_reply_uri' => $base_uri . 'pull_reply.json',

    /**
     * 查回复的短信api
     */
    'get_reply_uri' => $base_uri . 'get_reply.json',

    /**
     * 查短信发送记录api
     */
    'get_record_uri' => $base_uri . 'get_record.json',

    /**
     * 查屏蔽词api
     */
    'get_black_word_uri' => $base_uri . 'get_black_word.json',

    /**
     * 指定模板发送api
     */
    'tpl_send_uri' => $base_uri . 'tp_send.json',

    /**
     * 批量个性化发送api
     */
    'multi_send_uri' => $base_uri . 'multi_send.json',

);
