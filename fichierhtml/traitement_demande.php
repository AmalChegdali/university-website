<?php
session_start();


$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base_de_donnees = "projectdev";

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $base_de_donnees);

if ($connexion->connect_error) {
    die("Échec de la connexion à la base de données : " . $connexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contenu_demande = $_POST["contenu_demande"];
    $type_demande = $_POST["type_demande"];

    $date_demande = date("Y-m-d");
    $heure_demande = date("H:i:s");





    $requeteInsertion = "INSERT INTO demande (Type_Demande, Date_Demande, Heure_Demande, contenu, Id_Etudiant) VALUES (?, ?, ?, ?, ?)";
    $statement = $connexion->prepare($requeteInsertion);


    if ($statement) {

        $statement->bind_param("ssssi", $type_demande, $date_demande, $heure_demande, $contenu_demande, $id_etudiant);

        $resultat = $statement->execute();


        if ($resultat) {
            echo "Demande soumise avec succès !";
        } else {
            echo "Erreur lors de la soumission de la demande : " . $statement->error;
          
            echo "Requête SQL : " . $requeteInsertion; 
        }

        $statement->close();
    } else {
        echo "Erreur de préparation de la requête : " . $connexion->error;
    }
} else {
    echo "Le formulaire n'a pas été soumis.";
}




$connexion->close();
?>
