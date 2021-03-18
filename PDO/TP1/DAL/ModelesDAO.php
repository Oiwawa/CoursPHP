<?php
require_once 'ConnectionProvider01.php';
class ModeleDAO
{
    public function selectAll(){
        try {

            $pdo = ConnectionProvider01::getConnection();
            $requete = "SELECT id_modele, marque, modele, carburant FROM modeles;";
            $tableauDeResultat = $pdo->query($requete)->fetchAll();
        } catch (PDOException $e) {
            echo "PDOException";
        }
        return $tableauDeResultat;
    }
}