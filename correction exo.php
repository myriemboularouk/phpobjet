<?php 
class Membre 
{
	private $prenom ; 
	private $nom ; //Déclaration des propriètès (ou attributs)

	//ce code est éxéctè a chaque instanciation d'un objet 
	public function __construct($arg1, $arg2)
	{
		$this->setNom($arg1);
		$this->setNom($arg2);

	}
	public function setNom($arg)
	{
	$this->nom = $arg;	
	}
	public function setPrenom($arg)
	{
		$this->prenom = $arg;
	}
	//je cree le getter pour l'attribut nom . il renvoie le valeur de l'attribut nom.
	public function getNom()
	{
		return $this->nom;
	}
	public function getPrenom()
	{
		return $this->prenom;
	}
}

 ?>
