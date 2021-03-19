<?php
require_once './DAL/Connexion.php';
require_once './BO/Modele.php';

class ModeleDAO
{
    public function selectAll(): array
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

    public function ajouter(Modele $modele)
    {
        try {
            $pdo = Connexion::getConnection();
            $query = "INSERT INTO modeles VALUES(:id_modele, :marque, :modele, :carburant);";
            $prepQuery = $pdo->prepare($query);
            $prepQuery->bindValue(':id_modele', $modele->getIdModele());
            $prepQuery->bindValue(':marque', $modele->getMarque());
            $prepQuery->bindValue(':modele', $modele->getModele());
            $prepQuery->bindValue(':carburant', $modele->getCarburant());
            $prepQuery->execute();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


}