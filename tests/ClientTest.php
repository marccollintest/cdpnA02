<?php
require_once("src/Client.php");

class ClientTest extends PHPUnit_Framework_TestCase
{

    /**
    @test
    */
    public function testconstruct()
    {
        $clt = new Client("N",25000);
        $this->AssertEquals ("N", $clt->_Type);
        $this->AssertEquals (25000, $clt->_Encours);

    }

    public function testaccepte()
    {
        $TYPE = "N";
        $ENCOURS = 2000;
        $CMD = 1000;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertFalse ($clt->Accepte($CMD));
    }

 
}
?>
