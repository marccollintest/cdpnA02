<?php
require_once("src/operation.php");
class Division extends Operation
{
	public function __construct($pOp1, $pOp2)
	{
		$this->op1 = $pOp1;
		$this->op2 = $pOp2;
	}

	public function calculer($pOp1, $pOp2)
	{
		$this->op1  = $pOp1;
		$this->op2  = $pOp2;
		if ($pOp2 === 0)
		{
			throw new invalidArgumentException("Arguments incorrects, le second param doit être diff de zéro");
		}
		else
		{
			$this->resultat =  $this->op1 / $this->op2;
			return true;
		}
	}
	public function Equals( object $pDivision2)
	{
		return $pDivision2->resultat === $this->resultat;
	}
}

?>