<?php


class VilleAvecConstuctor
{
    private $nom;
    private $departement;

    /**
     * VilleAvecConstuctor constructor.
     * @param $nom
     * @param $departement
     */
    public function __construct($nom, $departement)
    {
        $this->nom = $nom;
        $this->departement = $departement;
    }

    function afficher(): string
    {
        return "La ville $this->nom est dans le département $this->departement. \n";
    }
}