<?php

require('autoload.php');

final class ClientTest extends PHPUnit_Framework_TestCase
{
    public function testCreateClientInstance()
    {
        $client = new Ipsp_Client( 1000 , 'test', 'api.fondy.eu' );
        $this->assertTrue( $client instanceof Ipsp_Client );
    }
    /**
     * @expectedException InvalidArgumentException
     */
    public function testGatewayParameterMissing()
    {
        $client = new Ipsp_Client(1000,'test');
        $client = new Ipsp_Client(1000);
        $client = new Ipsp_Client();
    }
}