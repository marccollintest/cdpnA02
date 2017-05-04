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
    const METTRE_EN_RAYON = 1;
    const METTRE_AU_REBUS = 2;
    const PRETER = 3;
    const RENDRE = 4;
    const PERDRE = 5;
    const REPARER = 6;
    const METRRE_A_REPARER = 7;
    const SUPPRIMER = 8;
}
*/
require_once("src/EnumMedia.php");
require_once("src/Media.php");
 class MediaTest extends PHPUnit_Framework_TestCase
{
	public $_obj;
	
    public function JeuEssaiCalculer1()
    {
        return array(
			array(EnumETAT::NOUVEAU,EnumACTION::CREER,EnumETAT::NOUVEAU),
			array(EnumETAT::NOUVEAU,EnumACTION::METTRE_EN_RAYON,EnumETAT::DISPONIBLE),
			array(EnumETAT::NOUVEAU,EnumACTION::METTRE_AU_REBUS,EnumETAT::ASUPPR),
			array(EnumETAT::NOUVEAU,EnumACTION::PRETER,EnumETAT::NOUVEAU),
			array(EnumETAT::NOUVEAU,EnumACTION::RENDRE,EnumETAT::NOUVEAU),
			array(EnumETAT::NOUVEAU,EnumACTION::PERDRE,EnumETAT::NOUVEAU),
			array(EnumETAT::NOUVEAU,EnumACTION::METTRE_A_REPARER,EnumETAT::NOUVEAU),
			array(EnumETAT::NOUVEAU,EnumACTION::REPARER,EnumETAT::NOUVEAU),
			array(EnumETAT::NOUVEAU,EnumACTION::SUPPRIMER,EnumETAT::NOUVEAU),
			array(EnumETAT::DISPONIBLE,EnumACTION::CREER,EnumETAT::DISPONIBLE),
			array(EnumETAT::DISPONIBLE,EnumACTION::METTRE_EN_RAYON,EnumETAT::DISPONIBLE),
			array(EnumETAT::DISPONIBLE,EnumACTION::METTRE_AU_REBUS,EnumETAT::DISPONIBLE),
			array(EnumETAT::DISPONIBLE,EnumACTION::PRETER,EnumETAT::EMPRUNTE),
			array(EnumETAT::DISPONIBLE,EnumACTION::RENDRE,EnumETAT::DISPONIBLE),
			array(EnumETAT::DISPONIBLE,EnumACTION::PERDRE,EnumETAT::DISPONIBLE),
			array(EnumETAT::DISPONIBLE,EnumACTION::METTRE_A_REPARER,EnumETAT::DISPONIBLE),
			array(EnumETAT::DISPONIBLE,EnumACTION::REPARER,EnumETAT::DISPONIBLE),
			array(EnumETAT::DISPONIBLE,EnumACTION::SUPPRIMER,EnumETAT::DISPONIBLE),
			array(EnumETAT::EMPRUNTE,EnumACTION::CREER,EnumETAT::EMPRUNTE),
			array(EnumETAT::EMPRUNTE,EnumACTION::METTRE_EN_RAYON,EnumETAT::EMPRUNTE),
			array(EnumETAT::EMPRUNTE,EnumACTION::METTRE_AU_REBUS,EnumETAT::EMPRUNTE),
			array(EnumETAT::EMPRUNTE,EnumACTION::PRETER,EnumETAT::EMPRUNTE),
			array(EnumETAT::EMPRUNTE,EnumACTION::RENDRE,EnumETAT::DISPONIBLE),
			array(EnumETAT::EMPRUNTE,EnumACTION::PERDRE,EnumETAT::ASUPPR),
			array(EnumETAT::EMPRUNTE,EnumACTION::METTRE_A_REPARER,EnumETAT::AREPARER),
			array(EnumETAT::EMPRUNTE,EnumACTION::REPARER,EnumETAT::EMPRUNTE),
			array(EnumETAT::EMPRUNTE,EnumACTION::SUPPRIMER,EnumETAT::EMPRUNTE),
			array(EnumETAT::AREPARER,EnumACTION::CREER,EnumETAT::AREPARER),
			array(EnumETAT::AREPARER,EnumACTION::METTRE_EN_RAYON,EnumETAT::AREPARER),
			array(EnumETAT::AREPARER,EnumACTION::METTRE_AU_REBUS,EnumETAT::ASUPPR),
			array(EnumETAT::AREPARER,EnumACTION::PRETER,EnumETAT::AREPARER),
			array(EnumETAT::AREPARER,EnumACTION::RENDRE,EnumETAT::AREPARER),
			array(EnumETAT::AREPARER,EnumACTION::PERDRE,EnumETAT::AREPARER),
			array(EnumETAT::AREPARER,EnumACTION::METTRE_A_REPARER,EnumETAT::AREPARER),
			array(EnumETAT::AREPARER,EnumACTION::REPARER,EnumETAT::DISPONIBLE),
			array(EnumETAT::AREPARER,EnumACTION::SUPPRIMER,EnumETAT::AREPARER),
			array(EnumETAT::AREPARER,EnumACTION::CREER,EnumETAT::ASUPPR),
			array(EnumETAT::AREPARER,EnumACTION::METTRE_EN_RAYON,EnumETAT::ASUPPR),
			array(EnumETAT::AREPARER,EnumACTION::METTRE_AU_REBUS,EnumETAT::ASUPPR),
			array(EnumETAT::AREPARER,EnumACTION::PRETER,EnumETAT::ASUPPR),
			array(EnumETAT::AREPARER,EnumACTION::RENDRE,EnumETAT::ASUPPR),
			array(EnumETAT::AREPARER,EnumACTION::PERDRE,EnumETAT::ASUPPR),
			array(EnumETAT::AREPARER,EnumACTION::METTRE_A_REPARER,EnumETAT::ASUPPR),
			array(EnumETAT::AREPARER,EnumACTION::REPARER,EnumETAT::ASUPPR),
			array(EnumETAT::AREPARER,EnumACTION::SUPPRIMER,EnumETAT::SUPPR),
			array(EnumETAT::SUPPR,EnumACTION::CREER,EnumETAT::SUPPR),
			array(EnumETAT::SUPPR,EnumACTION::METTRE_EN_RAYON,EnumETAT::SUPPR),
			array(EnumETAT::SUPPR,EnumACTION::METTRE_AU_REBUS,EnumETAT::SUPPR),
			array(EnumETAT::SUPPR,EnumACTION::PRETER,EnumETAT::SUPPR),
			array(EnumETAT::SUPPR,EnumACTION::RENDRE,EnumETAT::SUPPR),
			array(EnumETAT::SUPPR,EnumACTION::PERDRE,EnumETAT::SUPPR),
			array(EnumETAT::SUPPR,EnumACTION::METTRE_A_REPARER,EnumETAT::SUPPR),
			array(EnumETAT::SUPPR,EnumACTION::REPARER,EnumETAT::SUPPR),
			array(EnumETAT::SUPPR,EnumACTION::SUPPRIMER,EnumETAT::SUPPR)
			);
	}


	public function test1()
	{
		$this->_obj = new MediaFTO();
		$this->_obj->FTO_SetEtat(EnumETAT::DISPONIBLE);

		$this->_obj->Action(EnumACTION::CREER);

		$this->AssertEquals(EnumETAT::DISPONIBLE, $this->_obj->getCodeEtat());

	}

	/**
    *@dataProvider JeuEssaiCalculer1
    */


	public function test3($pEtatInit, $pAction, $pEtatResult)
	{
		$this->_obj = new MediaFTO();
		$this->_obj->FTO_SetEtat($pEtatInit);
		$this->_obj->Action($pAction);
		$this->AssertEquals($pEtatResult, $this->_obj->getCodeEtat());
	}

}
?>