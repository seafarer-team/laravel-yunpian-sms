<?php

/**
 * 模板api配置相关
 */

$base_uri = Config::get('yunpian-sms::yunpian.base_uri') . 'tpl/';

return array(
    /**
     * 获取默认模板api
     */
    'get_default_uri' => $base_uri . 'get_default.json',

    /**
     * 添加模板api
     */
    'add_uri' => $base_uri . 'add.json',

    /**
     * 获取模板api
     */
    'get_assign_uri' => $base_uri . 'get.json',

    /**
     * 修改模板api
     */
    'update_uri' => $base_uri . 'update.json',

    /**
     * 删除模板api
     */
    'del_uri' => $base_uri . 'del.json',

);