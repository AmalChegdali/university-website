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
    <title>Espace-Etudiant</title>
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
       padding: 2% 22%;
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
           padding-top: 50px;
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
           font-size: 28px;
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
           font-size: 17px;
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

    #tab_demande {
    width: 100%;
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
}

#tab_demande tr:nth-child(even) {
    background-color: #f9f9f9;
}

#tab_demande tr:hover {
    background-color: #e0e0e0;
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
                        <li><a href="../fichierhtml/emploi.php"target="_blank"> Emploi du temps</a></li>
                        <li><a href="#titre2">Annonces  </a></li>
                        <li><a  href="../fichierhtml/demandeEtudiant.php" target="_blank">Demandes</a></li>
                        
                    </ul>
                </div>
            
            </nav>
            <h1 ><pre id="titre1">  </pre></h1>
  


<h3 ><pre id="titre2">  Les Annonces des professeurs</pre></h3>
            <?php
// Connection to the database
$conn= mysqli_connect("localhost","root","","projectdev") or die( mysqli_connect_error());



// SQL query to select data from the employees table
$query = " SELECT RM.Nom_Responsable_Module, RM.Prenom_Responsable_Module,RM.Email_Responsable_Module,
A.titre, A.contenu, A.date_publication
FROM annonce A
INNER JOIN responsable_module RM  ON RM.Id_Responsable_Module = A.Id_Responsable_Module

";





$result = $conn->query($query);

// Output table header
echo "<table border='2' id='tab_demande'><tr>";


if ($row = mysqli_fetch_assoc($result)) {
    foreach ($row as $column => $value) {
        echo "<th>$column</th>";
    }
    echo "</tr>";

    // Output data rows
    mysqli_data_seek($result, 0); 
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>
<h3 ><pre id="titre2">  Les Annonces du chef de filiere</pre></h3>

<?php
$conn= mysqli_connect("localhost","root","","projectdev") or die( mysqli_connect_error());


$query = " SELECT cf.Nom_Chef_Filiere, cf.Prenom_Chef_Filiere,cf.Email_Chef_Filiere,
A.titre, A.contenu, A.date_publication
FROM annonce A
INNER JOIN chef_filiere cf  ON cf.Id_Chef_Filiere = A.id_Chef_Filiere

 ;";



$result = $conn->query($query);


echo "<table border='2' id='tab_demande'><tr>";


if ($row = mysqli_fetch_assoc($result)) {
    foreach ($row as $column => $value) {
        echo "<th>$column</th>";
    }
    echo "</tr>";

    // Output data rows
    mysqli_data_seek($result, 0); 
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

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