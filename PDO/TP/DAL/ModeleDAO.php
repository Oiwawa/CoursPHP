<?php
require_once 'Connexion.php';
require_once './BO/Modele.php';

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

    public function ajouter($modele) {
        try {
        $pdo = ConnectionProvider::getConnection();
        $query = "INSERT INTO modeles VALUES (:id_modele, :marque, :modele, :carburant)";
        $prepQuery = $pdo->prepare($query);
        $prepQuery->bindParam(':id_modele', $modele->getIdModele());
        $prepQuery->bindParam(':marque', $modele->getMarque());
        $prepQuery->bindParam(':modele', $modele->getModele());
        $prepQuery->bindParam(':carburant', $modele->getCarburant());
        $prepQuery->exec();
        } catch (PDOException $e){
            $e->getMessage();
        }
    }
}