<?php
class Client
{
	public $_Type;
	public $_Encours;
	public function __construct($pType, $pEnCours)
	{
		$this->_Type = $pType;
		$this->_EnCours = $pEnCours;
	}
	public function Accepte($pMontant)
	{
		return false;
	}
}

?>