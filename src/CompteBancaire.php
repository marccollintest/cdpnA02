<?php
class CompteBancaire
{	private  $_Solde;
	private  $_Devise;
	private  $_oWS;

	public function __construct($pDevise)
	{
		$this->_Solde = 0;
		$this->_Devise = $pDevise;
		$this->_oWS = new WSBANK();

	}
	public function Crediter ($pMontant, $pDevise)
	{
		$tx = $this->_oWS->getTaux($this->_Devise, $pDevise);
		 $this->_Solde =  $this->_Solde + ($pMontant*$tx);

	}

	public function Debiter ($pMontant, $pDevise)
	{
		$tx = $this->_oWS->getTaux($this->_Devise, $pDevise);
		 $this->_Solde =  $this->_Solde - ($pMontant*$tx);

	}
	public function getSolde($pDevise)
	{
		$tx = $this->_oWS->getTaux($pDevise,$this->_Devise);
		 return $this->_Solde * $tx;
	}

	// Méthode d'injection de dépendance
	public function setWS(IWSBK $pWS)
	{
		$this->_oWS = $pWS;
	}
}//Class compteBancaire
class CompteBancaireFTO extends CompteBancaire
{
}//Class CompteBancaireFTO

interface IWSBK
{
	public function getTaux($pDevise1, $pDevise2);
}
// Classe Bouchon du WSOriginal
class WSBANKStub implements IWSBK
{
	public function getTaux($pDevise1, $pDevise2)
	{
		if ($pDevise1=== $pDevise2)
		{
			return 1;
		}
		if ($pDevise1==="€" && $pDevise2==="$")
		{
			return 1.5;
		}
		if ($pDevise1==="$" && $pDevise2==="€")
		{
			return 1/1.5;
		}
		if ($pDevise1==="€" && $pDevise2==="£")
		{
			return 2;
		}
		if ($pDevise1==="£" && $pDevise2==="€")
		{
			return 0.5;
		}
	}
}//Class WSBANK
// Classe que je ne maitrise pas (interdit de la modifier)
class WSBANK implements IWSBK
{
	public function getTaux($pDevise1, $pDevise2)
	{
	 	//Code incompréhensible
	 	return rand(0,3);
	}
}//Class WSBANK
?>