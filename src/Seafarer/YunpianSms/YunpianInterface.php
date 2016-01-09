<?php

namespace Seafarer\YunpianSms;

interface YunpianSmsInterface {

    /**
     * 获取状态报告
     *
     * @return mixed
     */
    public function pullStatus();

    /**
     * 推送状态报告
     *
     * @return mixed
     */
    public function pushStatus();

}
