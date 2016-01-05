<?php

namespace Seafarer\YunPianSms;

class YunPianSmsClient {

    private $ch = '';

    public function __construct()
    {
        $this->$ch = curl_init();

        curl_setopt($this->ch, CURLOPT_HTTPHEADER, array('Accept:text/plain;charset=utf-8', 'Content-Type:application/x-www-form-urlencoded','charset=utf-8'));

        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($this->ch, CURLOPT_TIMEOUT, 10);

        curl_setopt($this->ch, CURLOPT_POST, 1);
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, false);
    }

    /**
     * 获取用户信息
     */
    public function getUser($apikey){

        curl_setopt ($this->ch, CURLOPT_URL, 'https://sms.yunpian.com/v1/user/get.json');
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, http_build_query(array('apikey' => $apikey)));
        $resp =  curl_exec($this->ch);

        $this->shutDown();

        return $resp;
    }

    /**
     * 发送自动匹配模板短信
     */
    public function send($data){

        curl_setopt ($this->ch, CURLOPT_URL, 'https://sms.yunpian.com/v1/sms/send.json');
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $resp =  curl_exec($this->ch);

        $this->shutDown();

        return $resp;
    }

    /**
     * 发送自定义模板短信
     */
    public function tplSend($data){

        curl_setopt ($this->ch, CURLOPT_URL, 'https://sms.yunpian.com/v1/sms/tpl_send.json');
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $resp =  curl_exec($this->ch);

        $this->shutDown();

        return $resp;
    }

    /**
     * 发送语音验证码
     */
    public function voiceSend($data){

        curl_setopt ($this->ch, CURLOPT_URL, 'http://voice.yunpian.com/v1/voice/send.json');
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $resp =  curl_exec($this->ch);

        $this->shutDown();

        return $resp;
    }

    private function shutDown()
    {
        curl_close($this->ch);
    }
}

