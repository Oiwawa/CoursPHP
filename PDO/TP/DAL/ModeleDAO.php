<?php
require_once 'Connexion.php';

class ModeleDAO
{
    public function selectAll()
    {
        $tableauDeResultat = [];
        try {
            $pdo = Connexion::getConnection();
            $requete = "SELECT id_modele, marque, modele, carburant FROM modeles;";
            $tableauDeResultat = $pdo->query($requete)->fetchAll();
        } catch (PDOException $e) {
            echo "PDOException : " . $e->getMessage();
        }
        return $tableauDeResultat;
    }
}