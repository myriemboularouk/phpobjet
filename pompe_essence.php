<?php 
/*

Creer une class Vehecule
attribut : $LitreEssence.
Methodes : getter et setter pour $LitreEssence.

Creer une class Pompe
attribut: $LitreEssence.
Methode : getter et setter pour $LitreEssence et donnerEssence($vehicule).
donnerEssence fait le plein de la voiture(ajoute 50 litres à son réservoire) et soustrait autant de lires au réservoir de la pompe àessence.

Instancier un véhicule.
Instancier une pompe à essence .
D
*/

class Vehicule
{
	private $LitreEssence;

	public function __construct($arg)
	{
		$this->setLitreEssence($arg);
	}

	public function setLitreEssence($arg)
	{
		$this->LitreEssence = $arg;
	}

	public function getLitreEssence()
	{
		return $this->LitreEssence;
	}
}

class Pompe{
	private $LitreEssence;

	public function __construct($arg)
	{
		$this->setLitreEssence($arg);
	}

	public function setLitreEssence($arg)
	{
		$this->LitreEssence = $arg;
	}

	public function getLitreEssence()
	{
		return $this->LitreEssence;
	}





}












 ?>