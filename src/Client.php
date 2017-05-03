<?php
class Client
{
	public $_Type;
	public $_Encours;
	public function __construct($pType, $pEncours)
	{
		$this->_Type = $pType;
		$this->_Encours = $pEncours;
	}
	public function Accepte($pMontant)
	{
		return false;
	}
}

?>