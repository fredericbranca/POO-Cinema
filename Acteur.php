<?php

class Acteur extends Personne {
	private array $casting;

	
	function __construct(string $nom, string $prenom,string $sexe, string $dateNaissance)
	{
	parent::__construct($nom, $prenom, $sexe, $dateNaissance);
	$this->casting = [];
	}

	// GETTERS ------------------------------------------

	public function set_casting($casting){
        $this ->casting = $casting;
    }

	public function setCastings($casting){
        $this ->casting = $castings;
    }

    public function addCasting(Casting $casting){
        $this->casting []= $casting;
    }

}