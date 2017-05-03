<?php
require_once("src/Division0.php");

class Division0Test extends PHPUnit_Framework_TestCase
{
    /**
    @test
    */
    public function testconstruct()
    {
        $op = new Division0(6,2);
        $this->AssertNotnull($op);
        $this->AssertEquals (6, $op->op1);
        $this->AssertEquals (2, $op->op2);
        $this->AssertEquals (3, $op->resultat);

        $op = new Division0(12,3);
        $this->AssertNotnull($op);
        $this->AssertEquals (12, $op->op1);
        $this->AssertEquals (3, $op->op2);
        $this->AssertEquals (4, $op->resultat);
    }

    public function testcalculerResultatSansJeuEssai()
    {
            // Création de la division
        $op = new Division0(12,4);
        // Calcul
        $op->calculer(15,3);
        // Vérification du résultat
        $this->AssertEquals(5, $op->resultat);

   }

/**
Test du constructeur avec le deuxième paramètre à zéro
**/
    public function testconstructAvecZero()
    {
        $op = null;
        try
        {
            $op = new Division0(6,0);
        }
        catch (Exception $ex)
        {
        }
       $this->Assertnull($op);
    }

    public function JeuEssaiCalculer1()
    {
        return array(
                array(15,3, 5),
                array(8, 4, 2),
                array(6, 3, 2),
                array(1, 1, 1)
                );
    }

    /**
    *@dataProvider JeuEssaiCalculer1
    */
    public function testcalculerResultatAvecJeuEssai($pOp1, $pOp2, $pRes)
    {
            // Création de la division
        $op = new Division0($pOp1,$pOp2);
        // Calcul
        $op->calculer($pOp1,$pOp2);
        // Vérification du résultat
        $this->AssertEquals($pRes, $op->resultat);

   }


    public function testEgalite2Div()
    {
        $op1 = new Division0(8,4);
        $op2 = new Division0(6,3);
        $this->AssertTrue($op1->Equals($op2),"2div sont egales si leur resultats sont égaux");
        $this->AssertTrue($op2->Equals($op1),"2div sont egales si leur resultats sont égaux");
    }

    public function testNonEgalite2Div()
    {
        $op1 = new Division0(8,4);
        $op2 = new Division0(5,3);
        $this->AssertFalse($op1->Equals($op2),"2div sont Différents si leur resultats sont différent");
    }
/*
    public function testEgalite2DivParZero()
    {
        $op1 = new Division0(1,1);
        $op2 = new Division0(1,1);
        try
        {
            $op1->Calculer(4,0);
        }
        catch (Exception $ex)
        {
        }
        try
        {
            $op2->Calculer(5,0);
        }
        catch (Exception $ex)
        {
        }

           $this->AssertTrue($op1->Equals($op2),"2div sont Différents si leur resultats sont différent");
    }
*/
    /**
    * @expectedException InvalidArgumentException
    */
    public function testDivisionParZeroExceptionAvecannotation()
    {
        $op1 = new Division0(8,4);
        $op1->calculer(8,0);
    }

    public function testDivisionParZeroExceptionSansannotation()
    {
        $bExceptionLevee = true;
        $op1 = new Division0(8,4);
        try
        {
            $op1->calculer(8,0);
            $bExceptionLevee=false;
        }
        catch (InvalidArgumentException $e) 
        {
            $bExceptionLevee=true;
        }
        $this->AssertTrue ($bExceptionLevee);
    }
    public function testDivisionParZeroResultat()
    {
        $op1 = new Division0(8,4);
        try
        {
            $op1->calculer(8,0);
        }
        catch (Exception $e) 
        {
            $this->Assertnull ($op1->resultat);
        }
    }
    /**
    @ExceptedException InvalidArgumentException
    Vérification que l'état est egal à false si le calcul ne s'effectue pas
    */
    public function testDivisionParZeroEtatFalse()
    {
        $op1 = new Division0(8,4);
        try
        {
            $op1->calculer(8,0);
        }
        catch (Exception $e) 
        {
            $this->AssertFalse ($op1->etat);
 
        }
    }
    // Test que l'état est coorectement MAJ par la méthode calculer
    public function testcalculerEtat()
    {
        $op = new Division0(3,4);
        $op->calculer(10,5);
        $this->AssertTrue ( $op->etat);

    }


    public function testToString()
    {
        $op1 = new Division0(8,4);
        $this->AssertEquals("Division (8/4)=2 ",$op1->ToString());
        $op1 = new Division0(12,4);
        $this->AssertEquals("Division (12/4)=3 ",$op1->ToString());
    }

 /*   public function testRisque()
    {
        $op1 = new Division0(8,4);
        $op1 = new Division0(12,4);
    }

    public function testIncomplet()
    {
        $this->markTestIncomplete("En attente");
    }
    public function testIgnore()
    {
        $this->markTestskipped("Ignorer ce tests tant que ....");
    }
    */
}
?>
