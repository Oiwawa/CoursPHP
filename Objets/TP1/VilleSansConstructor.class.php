<?php


class VilleSansConstuctor
{
    private $nom;
    private $departement;

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @param mixed $departement
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;
    }

    function afficher(): string
    {

        return "La ville ". $this->nom ." est dans le département ".$this->departement .".\n";
    }
}