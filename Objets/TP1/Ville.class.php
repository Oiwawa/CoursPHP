<?php


class Ville
{
    private $nom;
    private $departement;
    private static $villeNomLePlusLong = "";

    /**
     * VilleAvecConstuctor constructor.
     * @param $nom
     * @param $departement
     */
    public function __construct($nom, $departement)
    {
        $this->nom = $nom;
        $this->departement = $departement;
        $this->nomVillePlusLong();
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        $this->nomVillePlusLong();
    }

    /**
     * @return mixed
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * @param mixed $departement
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;
    }

    /**
     * @return string
     */
    public static function getVilleNomLePlusLong(): string
    {
        return static::$villeNomLePlusLong;
    }


    function afficher(): string
    {
        return "La ville $this->nom est dans le département $this->departement ";
    }

    private function nomVillePlusLong()
    {
        if (strlen($this->nom) > strlen(static::$villeNomLePlusLong)) {
            static::$villeNomLePlusLong = $this->nom;
        }
    }
}