<?php

class Personne {
	protected string $nom;
	protected string $prenom;
	protected string $sexe;
	protected DateTime $dateNaissance;


	function __construct(string $nom, string $prenom, string $sexe, DateTime $dateNaissance) 
	{
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->sexe = $sexe;
		$this->dateNaissance = new DateTime($dateNaissance);
	}

	// SETTERS -----------------------------------------------

	public function setNom(string $nom) {
		$this->nom = $nom;
	}

	public function setPrenom(string $prenom) {
		$this->prenom = $prenom;
	}

	public function setSexe(string $sexe) {
		$this->sexe = $sexe;
	}

	public function setDateNaissance(DateTime $dateNaissance) {
		$this->dateNaissance = new DateTime($dateNaissance);
	}

	// GETTERS -------------------------------------------------

	public function getNom(): string {
		return $this->nom;
	}

	public function getPrenom(): string {
		return $this->Prenom;
	}

	public function getSexe(): string {
		return $this->sexe;
	}

	public function getDateNaissance(): DateTime {
		return "Né(e) le : " . $this->dateNaissance . "<br>";
	}
}

	// FIN SETTERS & GETTERS ------------------------------------

