<?php


class Auteur {
    private string $nom;
    private string $prenom;
    private array $livres = [];

    public function __construct(string $nom, string $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function __toString() {
        return $this->prenom . ' ' . $this->nom;
    }

    public function ajouterLivre(Livre $livre) {
        $this->livres[] = $livre;
    }

    public function afficherBibliographie() {
        $bibliographie = '';
        foreach ($this->livres as $livre) {
            $bibliographie .= $livre . "<br>"; 
        }
        return $bibliographie;
    }

 }
