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
class Media
{
	private  $_Etat;
	public function __construct()
	{
		$this->_Etat = EnumETAT::NOUVEAU;
	}

	public function Action ($pAction)
	{
		 $bReturn = $this->_Etat;
		return $bReturn;
	}


	public function getEtat()
	{
		return $this->_Etat;
	}


}//Class Media

class MediaFTO extends Media
{

	public function FTO_setEtat( $pEtat)
	{
		$this->_Etat = $pEtat;
	}

}//Class MediaFTO
?>