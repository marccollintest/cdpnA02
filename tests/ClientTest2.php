<?php

require_once("src/Client2.php");

 class ClientTest2 extends PHPUnit_Framework_TestCase
{

    /**
    @test
    */
    public function testconstruct()
    {
        $clt = new Client2("N",25000);
        $this->AssertEquals("N", $clt->_Type);
        $this->AssertEquals(25000, $clt->_Encours);

    }
    public function JeuEssaiCalculer1()
    {
        return array(
array("S", 500,500 ,true),
array("S", 500,2000,True),
array("S", 500,7000    ,False),
array("S", 2000,  500,True),
array("S", 2000,  2000,False),
array("S", 2000,   7000    ,False),
array("S", 5000,  500,True),
array("S", 5000,  2000,False),
array("S", 5000,   7000    ,False),
array("N", 500,500 ,True),
array("N", 500,2000    ,True),
array("N", 500,7000    ,True),
array("N", 2000,  500,True),
array("N", 2000,  2000,True),
array("N", 2000,   7000    ,False),
array("N", 5000,  500,True),
array("N", 5000,  2000,False),
array("N", 5000,   7000    ,False),
array("P", 500,500 ,True),
array("P", 500,2000    ,True),
array("P", 500,7000    ,True),
array("P", 2000,  500,True),
array("P", 2000,  2000,True),
array("P", 2000,   7000    ,True),
array("P", 5000,  500,True),
array("P", 5000,  2000,True),
array("P", 5000,   7000    ,false)
    );
}

    /**
    *@dataProvider JeuEssaiCalculer1
    */
    public function testaccepte($pType, $pEncours,$pMt,$pRes)
    {
        $clt = new client2($pType,$pEncours);
        $res=$clt->Accepte($pMt);
    $this->AssertEquals($pRes,$res);
    }
}
?>
