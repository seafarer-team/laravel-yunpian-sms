<?php

use \Mockery as m;
use Seafarer\YunpianSms\YunpianSmsClient as Client;

class YunpianSmsClientTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function tearDown()
    {
        m::close();
    }

    public function testYunPianSmsClientProfile()
    {
        $client = new Client();

        $this->assertClassHasAttribute('ch', 'Seafarer\YunPianSms\YunPianSmsClient');
        $this->assertClassHasAttribute('version', 'Seafarer\YunPianSms\YunPianSmsClient');
        $this->assertEquals('YunPianSms v1.0.0', $client->getVersion());
    }

}
