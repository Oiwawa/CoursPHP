<?php

require_once "./Ville.class.php";
class VilleAvecRegion extends Ville
{
    private $region;
    /**
     * VilleAvecRegion constructor.
     */
    public function __construct($nom, $departement, $region)
    {
        parent::__construct($nom, $departement);
        $this->region = $region;
    }

    public function getNom()
    {
        return parent::getNom();
    }

    public function setNom($nom)
    {
        parent::setNom($nom);
    }

    public function getDepartement()
    {
        return parent::getDepartement();
    }

    public function setDepartement($departement)
    {
        parent::setDepartement($departement);
    }

    public function getRegion()
    {
        return $this->region;
    }

    function afficher(): string
    {
        return parent::afficher() ."de la region  $this->region \n" ;
    }


}