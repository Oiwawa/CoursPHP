<?php

try {
    //Créer la connexion
    $dsn = "sqlite:./bdd.sqlite";
    $pdo = new PDO($dsn);
    //Requete SELECT
    $requete = "SELECT nom, prenom from maTable;";
    //on recupere dans tableau le resultat de la requete SELECT, grace au fetch
    $tableau = $pdo->query($requete)->fetch();
    //Exec la query
    $pdo->exec($insertion = "INSERT INTO maTable VALUES ('Morane', 'Bob');");


   // $requetePreparee = "SELECT nom, prenom FROM maTable WHERE nom = ?;";
    //Prepared statement
    $requetePrep = $pdo->prepare($requetePreparee = "SELECT nom, prenom FROM maTable WHERE nom = ?;");

    //Dit que ? = une valeur
    $requetePrep->bindValue(1, 'Delpon');

    //Termine le programe
    $requetePrep->execute();

    //Recupere toutes les données stockées dans requetePrep et les stock dans tableau
    //Fetch recupere un tableau
    $tab = $requetePrep->fetchAll();

    //parametre nommé
    $requetePreparee2 = "SELECT nom, prenom FROM maTable WHERE nom = :nom;";
    $requetePrep2  = $pdo->prepare($requetePreparee2);
    $requetePrep2->bindValue(":nom",'Delpon');
    $requetePrep2->execute();
    $tab2 = $requetePrep2->fetchAll();

    //réutilisation de requetes
    $nom = 'Radepont';
    $prenom = 'Hugo';
    $query = 'INSERT INTO maTable(nom, prenom) VALUES(:nom,:prenom)';
    $prep = $pdo->prepare($query);
    $prep->bindParam(':nom',$nom);
    $prep->bindParam(':prenom',$prenom);

    $nom='Radepont';
    $prenom='Anais';
    $prep->execute();
} catch (PDOException $e) {
    echo $e->getMessage();
}
