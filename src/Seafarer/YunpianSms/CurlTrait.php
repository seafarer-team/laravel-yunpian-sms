<?php

namespace Seafarer\YunpianSms;

trait CurlTrait {

    /**
     * Curl init
     */
    public function setUp()
    {
        $this->ch = curl_init();

        curl_setopt($this->ch, CURLOPT_HTTPHEADER, array('Accept:text/plain;charset=utf-8', 'Content-Type:application/x-www-form-urlencoded','charset=utf-8'));

        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($this->ch, CURLOPT_TIMEOUT, 10);

        curl_setopt($this->ch, CURLOPT_POST, 1);
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, false);

        return $this;
    }

    /**
     * make a request
     */
    public function dispatch($data, $address)
    {
        curl_setopt ($this->ch, CURLOPT_URL, $address);
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, http_build_query($data));
        $this->inbox = curl_exec($this->ch);

        return $this;
    }

    /**
     * curl close
     */
    public function shutDown()
    {
        curl_close($this->ch);

        return $this;
    }
}
