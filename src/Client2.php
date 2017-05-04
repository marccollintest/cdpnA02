<?php
class Client2
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
		$bReturn = true;
		if (($this->_Type === "S") && 
			($this->_Encours <1000) && 
			($pMontant > 5000)
			)
		{
			$bReturn = false;
		}
		if (($this->_Type === "S") && 
			($this->_Encours >1000 && $this->_Encours <3000) && 
			($pMontant > 1000 && $pMontant <5000)
			)
		{
			$bReturn = false;
		}
		
		if (($this->_Type === "S") && 
			($this->_Encours >3000) && 
			($pMontant > 1000 && $pMontant <5000)
			)
		{
			$bReturn = false;
		}
		if (($this->_Type === "S") && 
			($this->_Encours >1000 && $this->_Encours <3000) && 
			($pMontant > 5000)
			)
		{
			$bReturn = false;
		}
		if (($this->_Type === "S") && 
			($this->_Encours >3000) && 
			($pMontant > 5000)
			)
		{
			$bReturn = false;
		}
		if (($this->_Type === "N") && 
			($this->_Encours >1000 && $this->_Encours <3000) && 
			($pMontant > 5000)
			)
		{
			$bReturn = false;
		}
		if (($this->_Type === "N") && 
			($this->_Encours >3000) && 
			($pMontant > 1000 && $pMontant < 5000)
			)
		{
			$bReturn = false;
		}
		if (($this->_Type === "N") && 
			($this->_Encours >3000) && 
			($pMontant >  5000)
			)
		{
			$bReturn = false;
		}
		if (($this->_Type === "P") && 
			($this->_Encours >3000) && 
			($pMontant >  5000)
			)
		{
			$bReturn = false;
		}
		return $bReturn;
	}
}

?>