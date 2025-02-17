<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faire les demandes </title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            margin: 0px;
        }
        i{
            margin-right: 6px;
        }
        .ligne1 {
            background-color: rgb(97, 97, 182);
            width: 300px;
            height: 50px;
            justify-content: center;
            align-items: center;
            display: flex;
            border: 2px solid rgb(245, 247, 249);
        }

        div :hover {
            background-color: rgb(52, 52, 105);
        }

        .ligne2 {
            background-color: rgb(97, 97, 182);
            width: 300px;
            height: 268px;
            border: 2px solid rgb(245, 247, 249);
        }

        .ligne3 {
            background-color: rgb(50, 50, 134);
        }

        a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
        }

        .navtete {
            background-color: rgb(97, 97, 182);
            width: 1216px;
            height: 50px;
            color: white;
            text-decoration: none;
            font-size: 30px;
            font-weight: 600;
            display: flex;
            align-items: center;
            padding-left: 40px;
        }

        #ligne4 {
            background-color: rgb(231, 231, 234);
            width: 800px;
            height: 480px;
            margin-left: 380px;
            margin-top: -540px;
        }

        h3 {
            padding-top: 35px;
            color: blue;
            font-size: 30px;
            font-weight: 600;
            text-align: center;
        }

        textarea {
            margin-left: 80px;
            padding: 20px;
            border-radius: 15px;
            border: 2px solid rgb(206, 205, 222);
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 20px;
        }

        textarea:focus {
            border: 4px solid rgb(153, 153, 236);
        }

        .input2 {
            justify-content: flex;
            margin-left: 320px;
            width: 190px;
            height: 40px;
            background-color: rgb(34, 165, 34);
            border-color: rgb(34, 165, 34);
            border-radius: 8px;
            color: white;
            font-weight: 600;
            font-size: large;
            cursor: pointer;
        }

        button:active {
            background-color: rgb(149, 215, 150);
        }

        img {
            width: 50px;
            height: 60px;
        }
        #num{
            margin-left: 300px;
            font-size: 20px;
        }
        #email{
            font-size: 20px;
            margin-left: 100px;
        }
        .logo2{
            width: 50px;
            height: 40px;
            margin-left: 150px;
            margin-right: -300px;
        }
        .logo3{
            width: 50px;
            height: 40px;
            margin-left: 70px;
            margin-right: -100px;
        }
        .message-validation {
            display: none;
            margin-top: -30px;
            padding: 20px;
            font-weight: 800;
        }
    </style>
</head>

<body>
<?php
session_start();
?>
    <div class="ligne3">,</div>
    <div>

        <div class="navtete">
            <img src="../iamges_projet/logofstt-removebg-preview.png" style="width: 60px;height:50px">
            FSTTanger
            <p id="num"><i class="fa-solid fa-phone"></i>+ 212 (0) 5 39 39 39 54 / 55</p>
        <p id="email"><i class="fa-solid fa-envelope"></i>administration.fstt@uae.ac.ma</p>
        </div>
        <div class="ligne1">
            <a href="demande.html"></a>
        </div>
        <div class="ligne1">
            <p><a href="../fichierhtml/delegchang.php">Demande du changement du groupe </a></p>
        </div>
        <div class="ligne1">
            <p><a href="../fichierhtml/delegabscence.php">Demande pour justifier l'absence</a></p>
        </div>
        <div class="ligne1">
            <p><a href="../fichierhtml/deleglettre.php">Demande Lettre de recommandation </a></p>
        </div>
        <div class="ligne1">
            <p><a href="../fichierhtml/rendezvous.php">Demande Rendez vous avec prof </a></p>
        </div>
        <div class="ligne1">
              <p><a href="../fichierhtml/reclamation.php">Faire des reclamations</a></p>
        </div>
        <div class="ligne2"></div>
        </nav>
    </div>
    <article id="ligne4">
        <h3 id="titreDemande">Faire des reclamations</h3>
        <form method="post" action="traitement_dele_demande.php" onsubmit="prepareDemande()">
        <textarea id="textarea" name="contenu_demande" placeholder="Demande" cols="60" rows="10"></textarea><br><br>
        <input type="submit" onclick="afficherValidation()" value="Valider"class="input2">
        </form>
        <div id="messageValidation" class="message-validation"></div>
    </article>
<script>
   
    function prepareDemande() {
     
        var titreDemande = document.getElementById("titreDemande").innerText;

        // Ajouter la valeur au champ caché du formulaire
        var inputTitreDemande = document.createElement("input");
        inputTitreDemande.type = "hidden";
        inputTitreDemande.name = "type_demande";
        inputTitreDemande.value = titreDemande;

        // Ajouter le champ caché au formulaire
        document.querySelector("form").appendChild(inputTitreDemande);
    }

      function afficherValidation() {
            var messageValidation = document.getElementById("messageValidation");
            messageValidation.style.display= "block";
            setTimeout(function () {
                messageValidation.style.display = "none";
            }, 10000);
            var textareaValue = document.getElementById("textarea").value;
            var messageValidation = document.getElementById("messageValidation");
            if (textareaValue.trim() === "") {
                messageValidation.innerHTML = "Veuillez remplir le textarea.";
                messageValidation.style.color = "red";     
            } else {
                messageValidation.innerHTML = "Votre demande a été bien enovoyée &#x2713;";
                messageValidation.style.color = "#4CAF50";
                messageValidation.style.fontSize =" 18px";
            }
            messageValidation.classList.add("afficher");        }
</script>


</body>

</html>