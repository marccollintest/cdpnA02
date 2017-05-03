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
		$bReturn = false;
		if ($this->_Type==="S")
		{
			if ($this->_Encours <1000)
			{
				if ($pMontant<=1000)
				{
					$bReturn = true;
				}
				if ($pMontant>1000 && $pMontant<=5000 )
				{
					$bReturn = true;
				}

			}
			if ($this->_Encours >1000 && $this->_Encours <=3000 )
			{
				if ($pMontant<1000)
				{
					$bReturn = true;
				}
				if ($pMontant>1000 && $pMontant<5000 )
				{
					$bReturn = false;
				}

			}
			if ($this->_Encours >3000 )
			{
				if ($pMontant<1000)
				{
					$bReturn = true;
				}
			}
		}

		if ($this->_Type==="N")
		{
			if ($this->_Encours <=1000)
			{
				if ($pMontant<=1000)
				{
					$bReturn = true;
				}
				if ($pMontant>1000 && $pMontant<=5000)
				{
					$bReturn = true;
				}
				if ($pMontant>5000)
				{
					$bReturn = true;
				}

			}
			if ($this->_Encours >1000 && $this->_Encours<=3000)
			{
				if ($pMontant<=1000)
				{
					$bReturn = true;
				}
				if ($pMontant>1000 && $pMontant<=5000)
				{
					$bReturn = true;
				}
				if ($pMontant>5000)
				{
					$bReturn = false;
				}

			}
			if ($this->_Encours >3000)
			{
				if ($pMontant<=1000)
				{
					$bReturn = true;
				}
				if ($pMontant>1000 && $pMontant<=5000)
				{
					$bReturn = false;
				}
				if ($pMontant>5000)
				{
					$bReturn = false;
				}

			}
		}
		if ($this->_Type==="P")
		{
			if ($this->_Encours <=1000)
			{
				if ($pMontant<=1000)
				{
					$bReturn = true;
				}
				if ($pMontant>1000 && $pMontant<=5000)
				{
					$bReturn = true;
				}
				if ($pMontant>5000)
				{
					$bReturn = true;
				}

			}
			if ($this->_Encours >1000 && $this->_Encours<=3000)
			{
				if ($pMontant<=1000)
				{
					$bReturn = true;
				}
				if ($pMontant>1000 && $pMontant<=5000)
				{
					$bReturn = true;
				}
				if ($pMontant>5000)
				{
					$bReturn = true;
				}

			}
			if ($this->_Encours >3000)
			{
				if ($pMontant<=1000)
				{
					$bReturn = true;
				}
				if ($pMontant>1000 && $pMontant<=5000)
				{
					$bReturn = true;
				}
				if ($pMontant>5000)
				{
					$bReturn = false;
				}

			}
		}

		return $bReturn;
	}
}

?>