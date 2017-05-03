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


//S   500 500 OK
    public function testaccepte2()
    {
        $TYPE = "S";
        $ENCOURS = 500;
        $CMD = 500;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertTrue ($clt->Accepte($CMD));
    }
//S   500 2000    OK
    public function testaccepte3()
    {
        $TYPE = "S";
        $ENCOURS = 500;
        $CMD = 2000;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertTrue ($clt->Accepte($CMD));
    }
//S   500 7000    NOK
    public function testaccepte4()
    {
        $TYPE = "S";
        $ENCOURS = 500;
        $CMD = 7000;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertFalse ($clt->Accepte($CMD));
    }
//S   2000    500 OK
    public function testaccepte5()
    {
        $TYPE = "S";
        $ENCOURS = 2000;
        $CMD = 500;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertTrue ($clt->Accepte($CMD));
    }
//S   2000    2000    NOK
    public function testaccepte6()
    {
        $TYPE = "S";
        $ENCOURS = 2000;
        $CMD = 2000;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertFalse ($clt->Accepte($CMD));
    }
//S   2000    7000    NOK
    public function testaccepte7()
    {
        $TYPE = "S";
        $ENCOURS = 2000;
        $CMD = 7000;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertFalse ($clt->Accepte($CMD));
    }
//S   5000    500 OK
    public function testaccepte8()
    {
        $TYPE = "S";
        $ENCOURS = 5000;
        $CMD = 500;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertTrue ($clt->Accepte($CMD));
    }
//S   5000    2000    NOK
    public function testaccepte9()
    {
        $TYPE = "S";
        $ENCOURS = 5000;
        $CMD = 2000;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertFalse ($clt->Accepte($CMD));
    }
//S   5000    7000    NOK
    public function testaccepte10()
    {
        $TYPE = "S";
        $ENCOURS = 5000;
        $CMD = 7000;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertFalse ($clt->Accepte($CMD));
    }
//N   500 500 OK
    public function testaccepte11()
    {
        $TYPE = "N";
        $ENCOURS = 500;
        $CMD = 500;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertTrue ($clt->Accepte($CMD));
    }
//N   500 2000    OK
    public function testaccepte12()
    {
        $TYPE = "N";
        $ENCOURS = 500;
        $CMD = 2000;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertTrue ($clt->Accepte($CMD));
    }
//N   500 7000    OK
    public function testaccepte13()
    {
        $TYPE = "N";
        $ENCOURS = 500;
        $CMD = 7000;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertTrue ($clt->Accepte($CMD));
    }
//N   2000    500 OK
    public function testaccepte14()
    {
        $TYPE = "N";
        $ENCOURS = 2000;
        $CMD = 500;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertTrue ($clt->Accepte($CMD));
    }
//N   2000    2000    OK
    public function testaccepte15()
    {
        $TYPE = "N";
        $ENCOURS = 2000;
        $CMD = 2000;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertTrue ($clt->Accepte($CMD));
    }
//N   2000    7000    NOK
    public function testaccepte16()
    {
        $TYPE = "N";
        $ENCOURS = 2000;
        $CMD = 7000;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertFalse ($clt->Accepte($CMD));
    }
//N   5000    500 OK
    public function testaccepte17()
    {
        $TYPE = "N";
        $ENCOURS = 5000;
        $CMD = 500;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertTrue ($clt->Accepte($CMD));
    }
//N   5000    2000    NOK
    public function testaccepte18()
    {
        $TYPE = "N";
        $ENCOURS = 5000;
        $CMD = 2000;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertFalse ($clt->Accepte($CMD));
    }
//N   5000    7000    NOK
    public function testaccepte19()
    {
        $TYPE = "N";
        $ENCOURS = 5000;
        $CMD = 7000;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertFalse ($clt->Accepte($CMD));
    }
//P   500 500 OK
    public function testaccepte20()
    {
        $TYPE = "P";
        $ENCOURS = 500;
        $CMD = 500;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertTrue ($clt->Accepte($CMD));
    }
//P   500 2000    OK
    public function testaccepte21()
    {
        $TYPE = "P";
        $ENCOURS = 500;
        $CMD = 2000;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertTrue ($clt->Accepte($CMD));
    }
//P   500 7000    OK
    public function testaccepte22()
    {
        $TYPE = "P";
        $ENCOURS = 500;
        $CMD = 7000;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertTrue ($clt->Accepte($CMD));
    }
//P   2000    500 OK
    public function testaccepte23()
    {
        $TYPE = "P";
        $ENCOURS = 2000;
        $CMD = 500;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertTrue ($clt->Accepte($CMD));
    }
//P   2000    2000    OK
    public function testaccepte24()
    {
        $TYPE = "P";
        $ENCOURS = 2000;
        $CMD = 2000;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertTrue ($clt->Accepte($CMD));
    }
//P   2000    7000    OK
    public function testaccepte25()
    {
        $TYPE = "P";
        $ENCOURS = 2000;
        $CMD = 7000;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertTrue ($clt->Accepte($CMD));
    }
//P   5000    500 OK
    public function testaccepte26()
    {
        $TYPE = "P";
        $ENCOURS = 5000;
        $CMD = 500;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertTrue ($clt->Accepte($CMD));
    }
//P   5000    2000    OK
    public function testaccepte27()
    {
        $TYPE = "P";
        $ENCOURS = 5000;
        $CMD = 2000;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertTrue ($clt->Accepte($CMD));
    }
//P   5000    7000    NOK
    public function testaccepte28()
    {
        $TYPE = "P";
        $ENCOURS = 5000;
        $CMD = 7000;
        $clt = new client($TYPE,$ENCOURS);
        $this->AssertFalse ($clt->Accepte($CMD));
    }


}
?>
