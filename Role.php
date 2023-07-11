<?php

class Role {
	private string $nom;
	private array $casting;
	
	public function __construct(string $nom) {
		$this->nom = $nom;
	}
	
	// GETTERS -----------------------
	
	public function getNom() {
		return $this->nom;
	}
	
	public function getCasting() {
		$this->casting = $casting;
	}
	
	// SETTERS -----------------------
	
	public function setNom($nom): string {
		$this->nom = $nom;
	}
	
	public function setCasting($casting): array {
		$this->casting = $casting;
	}
	
	// FIN SETTERS & GETTERS --------------

	public function __toString(){
		return $this->get_nom();
	}
}