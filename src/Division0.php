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
			$this->resultat =  $this->op1 / $this->op2;
			$this->etat =  true;
		}
		return $this->etat;
	}
	
	public function Equals( Division0 $pDivision2)
	{
		return $pDivision2->resultat === $this->resultat;
//		return true;
	}

	public function ToString()
	{
		return "Division ($this->op1/$this->op2)=$this->resultat ";
	}
}
//		return $pDivision2->resultat === $this->resultat;
//		return "Division $this->op1 / $this->op2 = $this->resultat";

?>