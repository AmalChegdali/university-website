<?php
session_start();

// Vérifier si l'utilisateur est authentifié
if (!isset($_SESSION["authentifie"]) || $_SESSION["authentifie"] !== true) {
    header("Location: login.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace-Prof</title>
    <style>
        

 *{
    list-style: none;
    text-transform: none;
    text-decoration: none;
   
 }

.header{
       height: 100px;
       width: 100%;    
}
nav{
       display: flex;
       padding: 2% 28%;
       justify-content: space-between;
       align-items: center;
   }
   
   .nav-links{
      
       text-align: right;
   }
   .nav-links ul li{
       list-style: none;
       display: inline-block;
       padding: 8px 30px;
     
   }
   .nav-links ul li a{
       color: #ffc107;
       text-decoration: none;
       font-size: 20px;
       font-weight: bold;
   }
   .nav-links ul li::after{
       content: '';
       width: 0%;
       height: 2px;
       background:#007bff;
       display: block;
       margin: auto;
       transition: 0.5s;
   }
   .nav-links ul li:hover::after{
       width: 100%;
   }
  
   
#div0{
        display: flex;
        justify-content: space-around;
        align-items: center;
        width: 100%;
        text-align: center;
        height: 150px;
        color: #164596;
    }
.Departement{
    background-color: #F9F9F9;
    padding-top: 12px;
}



footer{
           background: #446CB3;
           padding-top: 30px;
           color: white;
           margin-top: 30px;
           height: 350px;
           margin-top: 60px;
       }
       .container1{
           width: 1190px;
           margin: auto;
           display: flex;
           justify-content: center;
          
          
       }
       .footer-content{
           width: 39%;
           color: white;
         
          
       }
       .titre{
           font-size: 23px;
           margin-bottom: 15px;
           text-align: center;
           color: white;
       }
   
       .titre:hover{
           color:yellow;
       }
       .footer-content p{
           width:190px;
           margin: auto;
           padding: 7px;
           color: white;
           font-family: sans-serif;
           
       }
       .footer-content ul{
           text-align: center;
          
       }
       .list{
           padding: 0;
           
       }
       .list li{
           width: auto;
           text-align: center;
           list-style-type:none;
           padding: 7px;
           position: relative;
           color: white;
       }
       .list a {
           color: white;
           font-family: sans-serif;
       }
       .list li::before{
           content: '';
           position: absolute;
           transform: translate(-50%,-50%);
           left: 50%;
           top: 100%;
           width: 0;
           height: 2px;
           background: yellow;
           transition-duration: .5s;
           color: white;
       }
       .list li:hover::before{
           width: 70px;
       }
       .social-icons{
           text-align: center;
           padding: 0;
       }
       .social-icons li{
           display: inline-block;
           text-align: center;
           padding: 5px;
           color: white;
       }
       .social-icons i{
           color: white;
           font-size: 25px;
       }
     
      .list a:hover{
       color:yellow;
      }
       .social-icons i:hover{
           color: yellow;
       }
       .bottom{
           background: #007bff;
           text-align: center;
           padding: 13px;
           margin-top: 10px;
           font-family: sans-serif;
        
       }
       .bottomp{
           color: white;
           margin: 0;
           font-size: 16px;
           padding: 7px;
           font-weight: 600;
           
        
       }
       .newLetter input{
   
           width:200px;
           padding: 12px;
           border:white 1px solid ;
           font-size: 16px;
           border-radius: 12px;
           margin-bottom: 20px;
           margin-left: 50px;
          
       }
       .input1{
         color:black;
         text-align: center;
   
       }
       ::placeholder{
           color: black;
       }
   
   
    .image1{
       width:180px;
       height: 140px;
    }
    #titre1{
    
    height: 190px;
    font-size: 30px;
    color: white;
    text-align: center;
    background-position: 60% 60%;
    background-image: url('../iamges_projet/fstt.png');
    background-repeat: no-repeat;
    margin-top: -26px; 
  }
  #titre2{
      font-family: sans-serif;
      font-weight: bold;
      color:  rgb(10, 58, 130);
      border: 3px solid rgb(16, 104, 186);
      background-color:#FFFFFF;
      width:0%;
      margin-top: 10px;
      margin: 50px;
      font-size: 36px;
      
    }
    #ligne4 {
            background-color: rgb(231, 231, 234);
            width: 800px;
            height: 480px;
            margin-left: 200px;
            
        }
        textarea {
            margin-left: 80px;
            margin-top: 30px;
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
        #tab_demande{
            margin-left: 2%;
        }
        #div_titre_annonce :focus {
            height:30px;
            border: 3px solid green;
            color: blue;
            font-size: 15px;
            
        }
        #div_titre_annonce{
            margin-top: 20%;
            margin:30px;
        }
        ::placeholder{
            color: grey;
        }
        #titre_annonce{
            height:20px;
        }
        #tab_demande {
    width: 95%;
    border-collapse: collapse;
    margin-top: 20px;
}

#tab_demande th, #tab_demande td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

#tab_demande th {
    background-color: #f2f2f2;
    text-align: center;
}

#tab_demande tr:nth-child(even) {
    background-color: #f9f9f9;
}

#tab_demande tr:hover {
    background-color: #e0e0e0;
}
.button1{
   width: 90px;
   border-radius: 10px;
   background-color: green;
   border: 1px green solid;
   padding: 5px;
   color: white;
   font-size: 16px;
   margin-bottom: 7px;
   margin-left: 15%;
}
.button2{
   width: 90px;
   border-radius: 10px;
   margin-left: 15%;
   background-color: red;
   border: 1px red solid;
   padding: 5px;
   color: white;
   font-size: 16px;
   margin-bottom: 7px;
}
    </style>

</head>
<body>
    
      
   
    <div id="menu">
        <div style="background-color: #dadcf0;" id="div0">
            <div >          
                 <p><strong>جامعة عبد المالك السعدي بطنجة </strong</p> 
                 <p> <strong>ⵜⴰⵙⴷⴰⵡⵉⵜ ⵏ ⵄⴱⴷ ⵍⵎⴰⵍⴽ ⵙⴰⵄⴷⵉ ⴳ ⵟⴰⵏⵊⴰ </strong></p> 
                 <p><strong> Université Abdelmalek Essaâdi A Tanger</strong></p> 
            </div>
          
            <div > 
                <p><strong>كلية العلوم و التقنيات طنجة <strong</p>
                <p><strong> ⵜⴰⵙⴷⴰⵡⵉⵜ ⵏ ⵜⵎⴰⵙⵙⴰⵏⵉⵏ ⴷ ⵜⵉⵜⵉⴽⵏⵓⵍⵓⵊⵉⵜ ⵏ ⵟⴰⵏⵊⴰ <strong</p>
                <p><strong>Faculté des Sciences et Techniques de Tanger<p></strong>
              
            </div>
        </div>
        
        <section class="header">
            <nav>
               
                <div class="nav-links" id="navLinks">
                 
                    <ul>
                        <li><a href="../fichierhtml/index.php"target="_blank">Acceuil </a></li>
                        
                        <li><a href="#formations">Annonces  et Demandes reçues </a></li>
                        
                    </ul>
                </div>
            
            </nav>
            <h1 ><pre id="titre1">  </pre></h1>
            <h1 ><pre id="titre2">  Poster les Annonces </pre></h1>
            <article id="ligne4">
      
            <form  method="post" action="traitement_annonce.php" >
               <div style="text-align:center;  height:-30%;" id="div_titre_annonce"> <label for="type_annonce" > Titre </label><input type="text"  style="margin-top: 30px;border-radius:7px; border:1px solid gray; padding:5px" name="titre_annonce" placeholder="titre d'annonce" id="titre_annonce"></div>
            <textarea id="contenu_annonce" name="contenu_annonce" placeholder="Annonce" cols="60" rows="10"></textarea><br><br>
        <input type="submit" onclick="afficherValidation()" value="Valider" class="input2">
    </form>
        
        <div id="messageValidation" class="message-validation"></div>
    </article>
    <script>
        function afficherValidation() {
            var messageValidation = document.getElementById("messageValidation");
           
            messageValidation.style.display = "block";
            setTimeout(function () {
                messageValidation.style.display = "none";
            }, 10000);
            var textareaValue = document.getElementById("contenu_annonce").value;
            var messageValidation = document.getElementById("messageValidation");
            if (textareaValue.trim() === "") {
                messageValidation.innerHTML = "Veuillez remplir l'annonce.";
                messageValidation.style.color = "red";
            } else {
                messageValidation.innerHTML = "Votre demande a été bien enovoyée &#x2713;";
                messageValidation.style.color = "#4CAF50";
                messageValidation.style.fontSize = " 18px";
            }
            messageValidation.classList.add("afficher");
        }

        
   
    function prepareDemande() {
        // Récupérer le texte du titre annonce
        var titreDemande = document.getElementById("titre_annonce").innerText;

        // Ajouter la valeur au champ caché du formulaire
        var inputTitreDemande = document.createElement("input");
        inputTitreDemande.type = "hidden";
        inputTitreDemande.name = "type_demande";
        inputTitreDemande.value = titreDemande;

        // Ajouter le champ caché au formulaire
        document.querySelector("form").appendChild(titreDemande);
    }


    

    </script>
   <div>
<h1 ><pre id="titre2">  Les Demandes  </pre></h1>


<?php

$conn= mysqli_connect("localhost","root","","projectdev") or die( mysqli_connect_error());

 


$query = "SELECT e.Nom_Etudiant, e.Prenom_Etudiant, d.Type_Demande, d.contenu, d.Date_Demande
FROM demande d
INNER JOIN etudiant e ON e.Id_Etudiant = d.Id_Etudiant
WHERE d.Type_Demande IN ('Demande Rendez-vous Avec Prof', 'Demande pour justifier l\'absence')
GROUP BY d.Type_Demande;
";


$result = $conn->query($query);

echo "<table border='2' id='tab_demande'><tr>";



if ($row = mysqli_fetch_assoc($result)) {
    echo "<table border='2' id='tab_demande'><tr>";

    foreach ($row as $column => $value) {
        echo "<th>$column</th>";

        if ($column == 'Date_Demande') {
            echo "<th>Action</th>";
        }
    }
    echo "</tr>";

    mysqli_data_seek($result, 0);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";

        foreach ($row as $column => $value) {
            echo "<td>$value</td>";

            if ($column == 'Date_Demande') {
                echo "<td>";
                echo '
                <form action="repondreformulaire.php" method="post">
                  
                    <input type="hidden" name="id_demande" value="1"> 
                    <input type="submit" name="accepter" value="Accepter" class="button1">
                    <input type="submit" name="refuser" value="Refuser" class="button2">
                </form>
            ';
                echo "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}



$conn->close();


?>

          

</div>
            <footer>
    <div class="container1">
        <div class="footer-content">
            <h3 class="titre">Contactez-nous</h3>
            <p> Route Boukhalef, 90000 Tangier </p>
            <p>administration.fstt@uae.ac.ma</p>
            <p>+ 212(0) 5 39 39 39 54/55</p>
            <ul class="social-icons">
                <li><a href="https://web.facebook.com/fstt.ac.ma?mibextid=LQQJ4d&_rdc=1&_rdr" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/fsttanger/?igshid=Mzc1MmZhNjY%3D" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/school/fsttanger/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
               </ul>
           
        </div>
        <div class="footer-content" id="footer-content">
            <h3 class="titre">Liens Utiles</h3>
             <ul class="list">
                <li><a href="https://www.uae.ma/website/"  target="_blank">Site de l'Université</a></li>
                <li><a href="https://www.enssup.gov.ma/en">Enseignement Supérieur</a></li>
                <li><a href="https://jamiati.ma/fr"  target="_blank">Portail des Université marocaines</a></li>
                <li><a href="http://www.cse.ma/fr/"  target="_blank">Le Conseil Supérieur de l'Enseignement</a></li>
                <li><a href="https://www.maroc.ma/"  target="_blank">Potail National du Maroc</a></li>
             </ul>
        </div>
        <DIV class="localisation">
            <h3 class="titre">Localisation</h3>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28383.938938375115!2d-5.903399510528039!3d35.725033716005115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0b87d71f995045%3A0xc35a87c33b565280!2sFacult%C3%A9%20des%20sciences%20et%20techniques%20de%20Tanger!5e0!3m2!1sfr!2sma!4v1704136231951!5m2!1sfr!2sma" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
        </DIV>
        <div class="footer">
            <h3 class="titre">Newsletter</h3>
            <div class="newLetter">
                
                <input type="email" name="email" placeholder="Email">

                <input type="email" name="email" value="S'abonner" class="input1">
               
               
            </div>
            
             
            </div>
    </div>
    <div class="bottom">
        <p style="font-size: 15px;">&copy; Faculté des Sciences et Techniques de Tanger - Université Abdelmalek Essaâdi</p>
    </div>
</footer>




</body>
</html>
</body>
</html>