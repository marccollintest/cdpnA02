<?php
require_once("src/EnumMedia.php");
require_once("src/Etat.php");

class Media
{
	private  $_Etat;
	public function __construct()
	{
		$this->_Etat = Etat::EtatFactory(EnumETAT::NOUVEAU);
	}

	public function Action ($pAction)
	{

		 $this->_Etat = $this->_Etat->Action2($pAction);

	}

	public function Preter ()
	{
		 $this->Action(EnumACTION::PRETER);
	}

	public function getCodeEtat()
	{
		return $this->_Etat->getCodeEtat();
	}


}//Class Media

class MediaFTO extends Media
{

	public function FTO_setEtat( $pEtat)
	{
		$this->_Etat = Etat::EtatFactory($pEtat);
	}

	public function getCodeEtat()
	{
		return $this->_Etat->getCodeEtat();
	}

}//Class MediaFTO
?>