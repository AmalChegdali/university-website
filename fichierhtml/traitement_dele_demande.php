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

  
    $id_delegue = $_SESSION["id_delegue"];

    $requeteInsertion = "INSERT INTO demande (Type_Demande, Date_Demande, Heure_Demande, contenu, id_delegue) VALUES (?, ?, ?, ?, ?)";
    $statement = $connexion->prepare($requeteInsertion);


    if ($statement) {
    
        $statement->bind_param("ssssi", $type_demande, $date_demande, $heure_demande, $contenu_demande, $id_delegue);

        $resultat = $statement->execute();

      
        if ($resultat) {
            echo "Demande soumise avec succès !";
        } else {
            echo "Erreur lors de la soumission de la demande : " . $statement->error;
        }

     
        $statement->close();
    } else {
        echo "Erreur de préparation de la requête : " . $connexion->error;
    }
}

$connexion->close();
?>
