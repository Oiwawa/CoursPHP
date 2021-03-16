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
    public function getVilleNomLePlusLong(): string
    {
        return nomVillePlusLong();
    }

    /**
     * @param string $villeNomLePlusLong
     */
    public static function setVilleNomLePlusLong(string $villeNomLePlusLong)
    {
        self::$villeNomLePlusLong;
    }


    function afficher(): string
    {
        return "La ville $this->nom est dans le département $this->departement ";
    }

    public function nomVillePlusLong(): string
    {
        if (count($this->nom) > count(static::$villeNomLePlusLong)) {
            static::$villeNomLePlusLong = $this->nom;
        }
        return static::$villeNomLePlusLong;
    }
}