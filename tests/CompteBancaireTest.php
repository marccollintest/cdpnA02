<?php

require_once("src/compteBancaire.php");
 class compteBancaireTest extends PHPUnit_Framework_TestCase
{
	public function test1()
	{
			$Compte = new compteBancaire("€") ;
			// Création d'un bouchon du WS
			$WS = new WSBankStub();
			$Compte->setWS($WS);

			$Compte->Crediter(100, "€");
			$this->AssertEquals(100,$Compte->getSolde("€"));

			$Compte->Debiter(50, "€");

			$this->AssertEquals(50,$Compte->getSolde("€"));
	}

	public function test2()
	{
			$Compte = new compteBancaire("€") ;
			// Création d'un bouchon du WS
			$WS = new WSBankStub();
			$Compte->setWS($WS);

			$Compte->Crediter(100, "$");
			$this->AssertEquals(150,$Compte->getSolde("€"));
			$this->AssertEquals(100,$Compte->getSolde("$"));

	}

}
?>