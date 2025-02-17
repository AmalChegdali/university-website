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

    $contenu_annonce = $_POST["contenu_annonce"];
    $titre_annonce = $_POST["titre_annonce"];

    $date_annonce = date("Y-m-d");

    $Id_Responsable_Module = $_SESSION["id_responsable"];

    $requeteInsertion = "INSERT INTO annonce (titre, date_publication, contenu, id_chef_filiere) VALUES (?, ?, ?, ?)";

    $statement = $connexion->prepare($requeteInsertion);

    if ($statement) {
        $statement->bind_param("sssi", $titre_annonce, $date_annonce, $contenu_annonce, $Id_Responsable_Module);

        $resultat = $statement->execute();

        if ($resultat) {
            echo "Annonce soumise avec succès !";
        } else {
            echo "Erreur lors de la soumission de l'annonce : " . $statement->error;
        }

        $statement->close();
    } else {
        echo "Erreur de préparation de la requête : " . $connexion->error;
    }
}

$connexion->close();
?>
