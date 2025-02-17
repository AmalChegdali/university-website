<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idDemande = $_POST["ID"];
    $nomProf = $_POST["prof"];
    $emailEtudiant = $_POST["Email"];
    $sujetEtudiant = $_POST["etudiant"];
    $reponse = $_POST["reponse"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projectdev";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO repondre_demande(id, nom_prof, email_etudiant, sujet, reponse) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $idDemande, $nomProf, $emailEtudiant, $sujetEtudiant, $reponse);

    if ($stmt->execute()) {
        echo "Enregistrement réussi dans la base de données.";
    } else {
        echo "Erreur lors de l'enregistrement dans la base de données : " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
