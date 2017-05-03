<?php
class Division0
{
	public $op1;
	public $op2;
	public $resultat;
	public $etat;
	public function __construct($pOp1, $pOp2)
	{
		$this->op1 = $pOp1;
		$this->op2 = $pOp2;
		$this->calculer($pOp1,$pOp2);
	}
	public function calculer($pOp1, $pOp2)
	{
		$this->op1  = $pOp1;
		$this->op2  = $pOp2;
		if ($pOp2 === 0)
		{
			$this->resultat =  null;
			$this->etat =  false;
			throw new invalidArgumentException("Arguments incorrects, le second param doit être diff de zéro");
		}
		else
		{
			// simulation d'une erreur de codage
			if ($pOp2 === $pOp1)
			{
				$this->resultat =  1;
			}
			else
			{
			$this->resultat =  $this->op1 / $this->op2;
			}
			$this->etat =  true;
		}
		return $this->etat;
	}
	public function Equals( Division0 $pDivision2)
	{
		return $pDivision2->resultat === $this->resultat;
	}
	public function ToString()
	{
		return "Division ($this->op1/$this->op2)=$this->resultat ";
	}

	/**
	* 2 Divisions sont egale si leurs opérandes sont égales
	**/

	public function EgaleStrict(Division0 $pDivision2)
	{
		return true;
	}
}

?>