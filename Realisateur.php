<?php

class Realisateur extends Personne
{
	private array $films;


	public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
	{
		parent::__construct($nom, $prenom, $sexe, $dateNaissance);
	}

	public function ajouterFilm($film)
	{
		$this->films[] = $film;
	}
}
