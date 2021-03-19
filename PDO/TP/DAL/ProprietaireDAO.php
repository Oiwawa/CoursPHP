<?php
require_once './DAL/Connexion.php';
require_once './BO/Proprietaire.php';

class ProprietaireDAO
{
    public function selectId(int $id, string $nom)
    {
        $tableauResultat = [];
        try {
            $pdo = Connexion::getConnection();
            $query = "SELECT id_pers, nom, prenom, adresse, ville, codepostal FROM proprietaires 
                        WHERE id_pers = :id_pers AND nom = :nom;";
            $requeteSelect =$pdo->prepare($query);
            $requeteSelect->bindValue(':id_pers', $id);
            $requeteSelect->bindValue(':nom', $nom);
            $requeteSelect->execute();
            $tableauResultat = $requeteSelect->fetchAll();
            if(count($tableauResultat)){
                $proprietaire = new Proprietaire(
                  $tableauResultat['id_pers'],
                  $tableauResultat['nom'],
                  $tableauResultat['prenom'],
                  $tableauResultat['adresse'],
                  $tableauResultat['ville'],
                  $tableauResultat['codepostal']
                );
        return $proprietaire;
            }
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}