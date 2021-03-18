<?php


class CartesGrises
{

    private $immat;
    private $id_pers;
    private $dateCarte;

    /**
     * CartesGrises constructor.
     * @param $immat
     * @param $id_pers
     * @param $dateCarte
     */
    public function __construct($immat, $id_pers, $dateCarte)
    {
        $this->immat = $immat;
        $this->id_pers = $id_pers;
        $this->dateCarte = $dateCarte;
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
    public function getIdPers()
    {
        return $this->id_pers;
    }

    /**
     * @param mixed $id_pers
     */
    public function setIdPers($id_pers)
    {
        $this->id_pers = $id_pers;
    }

    /**
     * @return mixed
     */
    public function getDateCarte()
    {
        return $this->dateCarte;
    }

    /**
     * @param mixed $dateCarte
     */
    public function setDateCarte($dateCarte)
    {
        $this->dateCarte = $dateCarte;
    }


}