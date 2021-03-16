<?php


class Vehicule implements Roulant
{
    private $couleur;
    private $nbRoue;

    /**
     * Vehicule constructor.
     * @param $couleur
     * @param $nbRoue
     */
    public function __construct($couleur, $nbRoue)
    {
        $this->couleur = $couleur;
        $this->nbRoue = $nbRoue;
    }

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    /**
     * @return mixed
     */
    public function getNbRoue()
    {
        return $this->nbRoue;
    }

    /**
     * @param mixed $nbRoue
     */
    public function setNbRoue($nbRoue)
    {
        $this->nbRoue = $nbRoue;
    }

    function jeRoule()
    {

    }
}