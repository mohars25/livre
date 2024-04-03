<?php

class Livre {
    private string $titre;
    private int $nombreDePages;
    private int $anneeDeParution;
    private float $prix;
    private Auteur $auteur;

    public function __construct(string $titre, int $nombreDePages, int $anneeDeParution, float $prix, Auteur $auteur) {
        $this->titre = $titre;
        $this->nombreDePages = $nombreDePages;
        $this->anneeDeParution = $anneeDeParution;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $auteur->ajouterLivre($this);
    }

    public function __toString() {
        return "{$this->titre}, écrit par {$this->auteur}, publié en {$this->anneeDeParution}, {$this->nombreDePages} pages, {$this->prix}€";
    }


}

