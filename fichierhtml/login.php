<?php

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base_de_donnees = "projectdev";

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $base_de_donnees);


if ($connexion->connect_error) {
    die("Échec de la connexion à la base de données : " . $connexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Vérifier dans la table des étudiants
    $requeteEtudiant = "SELECT * FROM etudiant WHERE Email_Etudiant = ? AND Pass_Etudiant = ?";
    $statementEtudiant = $connexion->prepare($requeteEtudiant);
    $statementEtudiant->bind_param("ss", $email, $password);
    $statementEtudiant->execute();
    $resultatEtudiant = $statementEtudiant->get_result();

    if ($resultatEtudiant->num_rows == 1) {
      
        $_SESSION["authentifie"] = true;
        $rowEtudiant = $resultatEtudiant->fetch_assoc();
        $_SESSION["email"] = $rowEtudiant["Email_Etudiant"];
        $_SESSION["nom_etudiant"] = $rowEtudiant["Nom_Etudiant"];
        $_SESSION["prenom_etudiant"] = $rowEtudiant["Prenom_Etudiant"];
        $_SESSION["Id_Etudiant"] = $rowDelegue["Id_Etudiant"]; 
   
        header("Location: page_etudiant.php");
        exit();
    } else {
        $requeteDelegue = "SELECT * FROM delegue WHERE email = ? AND pass = ?";
        $statementDelegue = $connexion->prepare($requeteDelegue);
        $statementDelegue->bind_param("ss", $email, $password);
        $statementDelegue->execute();
        $resultatDelegue = $statementDelegue->get_result();

        if ($resultatDelegue->num_rows == 1) {
          
            $rowDelegue = $resultatDelegue->fetch_assoc();
            session_start();
            $_SESSION["authentifie"] = true;
            $_SESSION["id_delegue"] = $rowDelegue["id_delegue"]; 
            
         
            header("Location: page_delegue.php");
            exit();
        } else {
          
            $messageErreur = "Email ou mot de passe incorrect.";
        }

        $statementDelegue->close();
    }

    $statementEtudiant->close();
}

$connexion->close();
?>


<!DOCTYPE html>
<html>

<head>
    <style>
        
        * {
          box-sizing: border-box;
        }
        
        body {
          background-color: #151326;
          font-family: 'Open Sans', sans-serif;
          display: flex;
          align-items: center;
          justify-content: center;
          min-height: 100vh;
          margin: 0;
        }
        
        .container {
          background-color: #fff;
          border-radius: 5px;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
          overflow: hidden;
          width: 400px;
          max-width: 100%;
        }
        
        .header {
          border-bottom: 1px solid #f0f0f0;
          background-color: #f7f7f7;
          padding: 20px 40px;
        }
        
        .header h2 {
          margin: 0;
        }
        
        .form {
          padding: 30px 40px;
        }
        
        .form-control {
          margin-bottom: 10px;
          padding-bottom: 20px;
          position: relative;
        }
        
        .form-control label {
          display: inline-block;
          margin-bottom: 5px;
        }
        
        .form-control input {
          border: 2px solid #f0f0f0;
          border-radius: 4px;
          display: block;
          font-family: inherit;
          font-size: 14px;
          padding: 10px;
          width: 100%;
        }
        
      
     
        .form-control.error small {
          visibility: visible;
        }
        
        .form button {
          background-color: #225080;
          border: 2px solid #225080;
          border-radius: 4px;
          color: #fff;
          display: block;
          font-family: inherit;
          font-size: 16px;
          padding: 10px;
          margin-top: 20px;
          width: 100%;
          cursor: pointer;
        }
        
       
        
       
      
        </style>
  
</head>

<body>
  <div class="container">
    <div class="header">
      <h2 align="center"> Espace-Etudiant</h2>
    </div>
    <form id="form" class="form" method="post" action="login.php">
      <div class="form-control">
        <input type="email" placeholder="Email" id="email" name="email"/>
      </div>
      <div class="form-control">
        <input type="password" placeholder="Password" id="email" name="password"/>
      </div>
      <button>S'authentifier</button>
      <?php
    if (isset($messageErreur)) {
        echo "<p style='color: red;'>$messageErreur</p>";
    }
    ?>

    </form>
  </div>
</body>

</html>