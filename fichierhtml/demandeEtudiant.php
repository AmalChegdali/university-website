<?php
session_start();

// Vérifier si l'utilisateur est authentifié
if (!isset($_SESSION["authentifie"]) || $_SESSION["authentifie"] !== true) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas authentifié
    header("Location: login.php");
    exit();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faire les demandes </title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            margin: 0px;
        }
        .ligne1{
            background-color: rgb(97, 97, 182);
            width: 300px;
            height: 50px;
            justify-content: center;
            align-items: center;
            display: flex;
            border: 2px solid rgb(245, 247, 249);
        }
        div :hover{
            background-color: rgb(52, 52, 105);
        }
        .ligne2{
            background-color: rgb(97, 97, 182);
            width: 300px;
            height: 268px;
            border: 2px solid rgb(245, 247, 249);
        }
        .ligne3{
            background-color: rgb(50, 50, 134);
        }
        a{
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: 600;
        }
        .navtete{
           background-color: rgb(97, 97, 182);
           width: 1999;
           height: 50px;

           color: white;
            text-decoration: none;
            font-size: 30px;
            font-weight: 600;
            display: flex;
            align-items: center;
            padding-left:80px;
        }
        article{
            margin-top: -540px;
            margin-left: 304px;
        }
        #fst{
        width: 950px;
        height: 537px;
        }
        #logo{
            width: 50px;
            height: 60px;
        }
        h1{
            position: absolute;
            top: 47%;
            margin-left: 684px;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 50px;
            font-weight: bold; 
            text-align: center;
        }
        span{
            color: rgb(29, 140, 77);
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
        i{
            margin-right: 6px;
        }
        </style>
</head>
<body>
    <div class="ligne3">,</div>
    <div>
         <div class="navtete">
           
            FSTTanger
            <p id="num"><i class="fa-solid fa-phone"></i>+ 212 (0) 5 39 39 39 54 / 55</p>
        <p id="email"><i class="fa-solid fa-envelope"></i>administration.fstt@uae.ac.ma</p>
        </div>
        <div class="container">
      
        
      
      
    </div>
        <div class="ligne1">
            <a href="demande.html"></a>
        </div>
          <div class="ligne1">
              <p><a href="../fichierhtml/dchang.php">Demande du changement du groupe</a></p>
          </div>    
        <div class="ligne1">
                <p><a href="../fichierhtml/abscence.php">Demande pour justifier l'absence</a></p>
        </div>
        <div class="ligne1">
                <p><a href="../fichierhtml/lettre.php">Demande Lettre de recommandation</a></p>
        </div>
        <div class="ligne1">
                <p><a href="../fichierhtml/rendezvous.php">Demande Rendez vous avec prof</a></p>
        </div>
        <div class="ligne2"></div>
        </nav>
        </div>
        <article>
            <img id="fst" src="../iamges_projet/fstt.png" alt="" alt="">
        </article>
        <h1><span>Veu</span>illez Choisir Votre Demande</h1>
</body>


</html>