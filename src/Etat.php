<?php
require_once("src/EnumMedia.php");

 class Etat
{
	protected $_CodeEtat;

	public function getCodeEtat()
	{
	return $this->_CodeEtat;
	}

	public function Action2($pAction)
	{
		return $this;
	}

	public static function EtatFactory($pcodeEtat)
	{

		$oReturn = new EtatNOUVEAU();
		switch ($pcodeEtat) {
		    case EnumETAT::NOUVEAU:
		    	$oReturn=  new EtatNOUVEAU();
		    	break;
		    case EnumETAT::DISPONIBLE:
		    	$oReturn=  new EtatDISPONIBLE();
		    	break;
		    case EnumETAT::ASUPPR:
		    	$oReturn=  new EtatASUPPR();
		    	break;
		    case EnumETAT::EMPRUNTE:
		    	$oReturn=  new EtatEMPRUNTE();
		    	break;
		    case EnumETAT::AREPARER:
		    	$oReturn=  new EtatAREPARER();
		    	break;
		    case EnumETAT::SUPPR:
		    	$oReturn=  new EtatSUPPR();
		    	break;
		    }
		    return $oReturn;

	}//EtatFactory
}//Class Etat

 class EtatNOUVEAU extends Etat
{
	public function __construct()
	{
		$this->_CodeEtat = EnumETAT::NOUVEAU;
	}
/*
	public function Action2($pAction)
	{
		$Return = $this; 
		if ($pAction === EnumAction::METTRE_EN_RAYON)
		{
				$Return = Etat::EtatFactory(EnumETAT::DISPONIBLE);
		}
		if ($pAction === EnumAction::METTRE_AU_REBUS)
		{
				$Return = Etat::EtatFactory(EnumETAT::ASUPPR);
		}
		return $Return;
	}//Action
*/
}//EtatNouveau

 class EtatDISPONIBLE extends Etat
{
	public function __construct()
	{
		$this->_CodeEtat = EnumETAT::DISPONIBLE;
	}
/*
	public function Action2($pAction)
	{
		$Return = $this; 
		if ($pAction === EnumAction::EMPRUNTER)

		{
				$Return = Etat::EtatFactory(EnumETAT::EMPRUNTE);
		}
		return $Return;
	}//Action
*/

}//EtatDISPONIBLE

 class EtatASUPPR extends Etat
{
	public function __construct()
	{
		$this->_CodeEtat = EnumETAT::ASUPPR;
	}

/*
	public function Action2($pAction)
	{
		$Return = $this; 
		if ($pAction === EnumAction::SUPPRIMER)

		{
				$Return = Etat::EtatFactory(EnumETAT::SUPPRIME);
		}
		return $Return;
	}//Action
	*/
}//EtatASUPPR

 class EtatEMPRUNTE extends Etat
{
	public function __construct()
	{
		$this->_CodeEtat = EnumETAT::EMPRUNTE;
	}

}//EtatEMPRUNTE

 class EtatAREPARER extends Etat
{
	public function __construct()
	{
		$this->_CodeEtat = EnumETAT::AREPARER;
	}

}//EtatAREPARER

 class EtatSUPPR extends Etat
{
	public function __construct()
	{
		$this->_CodeEtat = EnumETAT::SUPPR;
	}

}//EtatASUPPR


?>