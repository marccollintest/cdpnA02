<?php
/*abstract class EnumETAT
{
	const NOUVEAU = 0;
    const DISPONIBLE = 1;
    const EMPRUNTE = 2;
    const AREPARER = 3;
    const ASUPPR = 4;
    const SUPPR = 5;
}
abstract class EnumACTION
{
	const CREER = 0;
    const METTRE-EN-RAYON = 1;
    const METTRE-AU-REBUS = 2;
    const PRETER = 3;
    const RENDRE = 4;
    const PERDRE = 5;
    const REPARER = 6;
    const METRRE-A-REPARER = 7;
    const SUPPRIMER = 8;
}
*/
require_once("src/EnumMedia.php");
require_once("src/Media.php");
 class MediaTest extends PHPUnit_Framework_TestCase
{
	public $_obj;
	
	public function test1()
	{
		$this->_obj = new Media();
		$this->AssertEquals(EnumETAT::NOUVEAU, $this->_obj->_Etat);
	}
	public function test2()
	{
		$this->_obj = new Media();
		$this->_obj->Action(EnumACTION::CREER);
		$this->AssertEquals(EnumETAT::NOUVEAU, $this->_obj->_Etat);
	}
	public function test3()
	{
		$this->_obj = new Media();
		$this->_obj->Action(EnumACTION::PRETER);
		$this->AssertEquals(EnumETAT::NOUVEAU, $this->_obj->_Etat);
	}

}
?>