<?php
session_start();

$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$base_de_donnees = "projectdev";

// Connexion à la base de données
$connexion = mysqli_connect($serveur, $utilisateur, $motdepasse, $base_de_donnees);

// Vérifier la connexion
if (!$connexion) {
    die("Échec de la connexion à la base de données : " . mysqli_connect_error());
}

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $motdepasse = $_POST["password"];

    // Éviter les injections SQL avec mysqli_real_escape_string
    $email = mysqli_real_escape_string($connexion, $email);
    $motdepasse = mysqli_real_escape_string($connexion, $motdepasse);

    // Vérifier dans la table des responsables de module
    $requeteResponsable = "SELECT * FROM responsable_module WHERE Email_Responsable_Module = '$email' AND Id_Responsable_Module = '$motdepasse'";
    $resultatResponsable = mysqli_query($connexion, $requeteResponsable);

    if ($resultatResponsable) {
        $rowResponsable = mysqli_fetch_assoc($resultatResponsable);

        if ($rowResponsable) {
          session_start();
            // Authentification réussie, enregistrez la variable de session
            $_SESSION["authentifie"] = true;
            $_SESSION["email"] = $rowResponsable["Email_Responsable_Module"];
            $_SESSION["nom_responsable"] = $rowResponsable["Nom_Responsable_Module"];
            $_SESSION["prenom_responsable"] = $rowResponsable["Prenom_Responsable_Module"];
            $_SESSION["Id_Responsable_Module"] = $rowResponsable["Id_Responsable_Module"];
            // Requête pour récupérer des informations supplémentaires depuis une autre table

            header("Location: EspaceProf.php");
            exit();
        } else {
            $messageErreur = "Email ou ID incorrect.";
        }
    } else {
        $messageErreur = "Erreur de requête : " . mysqli_error($connexion);
    }
}

mysqli_close($connexion);
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
        
        .form-control input:focus {
          outline: 0;
          border-color: #777;
        }
        
        .form-control.success input {
          border-color: #2ecc71;
        }
        
        .form-control.error input {
          border-color: #e74c3c;
        }
        
        .form-control i {
          visibility: hidden;
          position: absolute;
          top: 13px;
          right: 10px;
        }
        
       
        
        .form-control small {
          color: #e74c3c;
          position: absolute;
          bottom: 0;
          left: 0;
          visibility: hidden;
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
        
        .floating-btn {
          border-radius: 26.5px;
          background-color: #001f61;
          border: 1px solid #001f61;
          box-shadow: 0 16px 22px -17px #03153b;
          color: #fff;
          cursor: pointer;
          font-size: 16px;
          line-height: 20px;
          padding: 12px 20px;
          position: fixed;
          bottom: 20px;
          right: 20px;
          z-index: 999;
        }
        
        .floating-btn:hover {
          background-color: #ffffff;
          color: #001f61;
        }
        
        .floating-btn:focus {
          outline: none;
        }
        
        .floating-text {
          background-color: #001f61;
          border-radius: 10px 10px 0 0;
          color: #fff;
          font-family: 'Muli';
          padding: 7px 15px;
          position: fixed;
          bottom: 0;
          left: 50%;
          transform: translateX(-50%);
          text-align: center;
          z-index: 998;
        }
        
        .floating-text a {
          color: #ff7500;
          text-decoration: none;
        }
        
      
        </style>
 
</head>

<body>
  <div class="container">
    <div class="header">
      <h2 align="center"> Espace-Prof</h2>
    </div>
    <form id="form" class="form" method="post" action="loginprof.php">
      <div class="form-control">
        <input type="email" placeholder="Email" id="email" name="email"/>
      </div>
      <div class="form-control">
        <input type="password" placeholder="Password" id="email" name="password"/>
      </div>
      <button>Submit</button>
      <?php
    if (isset($messageErreur)) {
        echo "<p style='color: red;'>$messageErreur</p>";
    }
    ?>

    </form>
  </div>
</body>

</html>