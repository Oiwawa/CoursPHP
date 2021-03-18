<?php
require_once './ConnectionProvider.php';
require_once './Pokemon.php';

class PokemonDAO
{
    function insert($pokemon)
    {
        try {
            $tab = [];
            $pdo = ConnectionProvider::getConnection();
            $requete = "INSERT INTO Pokemons VALUES (:id,:nom)";
            $requetePrep = $pdo->prepare($requete);
            $requetePrep->bindValue(':id', $pokemon->getId());
            $requetePrep->bindValue(':nom', $pokemon->getNom());
            $requetePrep->execute();
            $tab = $requetePrep->fetchAll();

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $tab;
    }
}