<?php


class Voitures
{

    private $immat;
    private $id_modele;
    private $couleur;
    private $dateVoiture;

    /**
     * Voitures constructor.
     * @param $immat
     * @param $id_modele
     * @param $couleur
     * @param $dateVoiture
     */
    public function __construct($immat, $id_modele, $couleur, $dateVoiture)
    {
        $this->immat = $immat;
        $this->id_modele = $id_modele;
        $this->couleur = $couleur;
        $this->dateVoiture = $dateVoiture;
    }

    /**
     * @return mixed
     */
    public function getImmat()
    {
        return $this->immat;
    }

    /**
     * @param mixed $immat
     */
    public function setImmat($immat)
    {
        $this->immat = $immat;
    }

    /**
     * @return mixed
     */
    public function getIdModele()
    {
        return $this->id_modele;
    }

    /**
     * @param mixed $id_modele
     */
    public function setIdModele($id_modele)
    {
        $this->id_modele = $id_modele;
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
    public function getDateVoiture()
    {
        return $this->dateVoiture;
    }

    /**
     * @param mixed $dateVoiture
     */
    public function setDateVoiture($dateVoiture)
    {
        $this->dateVoiture = $dateVoiture;
    }


}