<html>
<head>
  <title>MIP</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <script src="../fichierjavascript/fst.js"></script>
  <style>
 
  #titre2{
    font-family: sans-serif;
    font-weight: bold;
    color:  rgb(10, 58, 130);
    border: 3px solid rgb(16, 104, 186);
    background-color:#FFFFFF;
    width:0%;
  
  }

  
.container {
     
     text-align: center;
     color: white; 
     font-size: 18px; 
   }

   .image {
     width: 260px;
    height: 200px;
    
   }


   .box-container{
       display: flex;
       margin-left: 60px;
       margin-right: 50px;
      
   }

   .text {
   
    
     background-color: black;
     margin-left: 50px;
     margin-top: 10px;
     
     width: 190px;
    
     text-align: center;
     padding-top: 4px;
     padding-bottom: 5px;
   }
   .container {
     position: relative;
     text-align: center;
     color: white; 
     font-size: 18px; 
     margin-left: 12px;
     box-shadow: 0px 0px 4px rgb(0, 0, 0, 0.3);
   }

   
   .text {
     position: absolute;
     top:38%; 
     left: 13%; 
     transform: translate(-25%, -20%); 
     background-color: #FFFFFF;
     width: 190px;
   
     text-align: center;
     padding-top: 4px;
     padding-bottom: 5px;
   }
.text a {
   color: #212529;
   font-size: 17px;
   font-weight: 700;
}
.image:hover{
   transform: scale(1.07);
}

.Departement{
   margin-bottom: 30px;
}
#div0 div p {
font-weight: bold;
font-size: 17px;
}

.header{
      height: 100px;
      width: 100%;    
}
nav{
      display: flex;
      padding: 2% 8%;
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
   }
  .contenu2{
    font-family: sans-serif;
  }
    .body1{
      width: auto;
      margin-left: 60px;
    }
    /*          */
h1+ul {
   
  list-style-type: none;
  margin: 3%;
  margin-right: 45px;
  padding: 0;
  overflow: hidden;
  background-color: #fffdfd;
  border:2px solid #b6eb4d;
 
}

li {
  float: left;
}

li a {
  display: block;
  color: rgb(0, 0, 0);
  font-weight: bold;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

    li a:hover {
  background-color: #006387;
  color: white;
  
}

.active {
  
  color: white;
    font-weight: bold;
    text-align: center;
    background: linear-gradient(-40deg, #147259 20%, #006387 80% , rgb(11, 65, 116) 70%);
    height: 36px ; 
    
}
td+td {
    width:500px;
    height: d;
    border:2px solid #b6eb4d;
   
}

table{
    border:2px solid #147259 ;
    margin-left: 25%;
}
#coordinateur{
margin-left: 25%;
}
#objectifs{
  margin: 50px;
  margin-right: 16%;
  height: auto;
}
</style>
<body>
<header>
        <div id="menu">
          <div style="background-color: #dadcf0;" id="div0">
              <div >          
                   <p>جامعة عبد المالك السعدي بطنجة </p> 
                   <p> ⵜⴰⵙⴷⴰⵡⵉⵜ ⵏ ⵄⴱⴷ ⵍⵎⴰⵍⴽ ⵙⴰⵄⴷⵉ ⴳ ⵟⴰⵏⵊⴰ </p> 
                   <p>Université Abdelmalek Essaâdi A Tanger</p> 
              </div>
            <div>
               
            </div>
              <div > 
                  <p>كلية العلوم و التقنيات طنجة </p>
                  <p> ⵜⴰⵙⴷⴰⵡⵉⵜ ⵏ ⵜⵎⴰⵙⵙⴰⵏⵉⵏ ⴷ ⵜⵉⵜⵉⴽⵏⵓⵍⵓⵊⵉⵜ ⵏ ⵟⴰⵏⵊⴰ </p>
                  <p>Faculté des Sciences et Techniques de Tanger<p>
                
              </div>
          </div>
          <section class="header">
            <nav>
               
                <div class="nav-links" id="navLinks">
                 
                    <ul>
                        <li><a href="../fichierhtml/presentation.html">Acceuil </a></li>
                        <li><a href="../fichierhtml/presentation.html">Faculté</a></li>
                        <li><a href="../fichierhtml/presentation.html" target="_blank">Formation </a></li>
                        <li><a href="../fichierhtml/presentation.html"target="_blank">Espace-Etudiant</a></li>
                        <li><a href="../fichierhtml/departement.php" target="_blank">Département</a></li>
    
                     
                       
                    </ul>
                </div>
            
            </nav>
          </section>
      </header>
    
    <div class="body1">
  <h1 ><pre id="titre2">  Math Informatique Physique</pre></h1>
    <ul>
        <li>  <a class="active" href="#OBJECTIFS" onclick="afficherContenu('objectifs')" ><img src="../iamges_projet/goal.png" >  OBJECTIFS</a></li>
        <li><a href="#PROGRAMME" onclick="afficherContenu('programme')" ><img src="../iamges_projet/checklist (1).png" >  PROGRAMME</a></li>
        <li><a href="#competences" onclick="afficherContenu('competences')"><img src="../iamges_projet/key-skills.png" >  COMPETENCES VISEES ET DEBOUCHES</a></li>
        <li><a href="#COORDINATEUR" onclick="afficherContenu('coordinateur')" ><img src="../iamges_projet/businessman.png" >  COORDINATEUR</a></li>
    </ul>
    <div id="objectifs" class="contenu" style="display:block;text-align:justify;"><p>
        L’objectif du tronc commun MIP est de donner à l’étudiant une base solide dans les matières scientifiques (physique, chimie et mathématiques etc…) qui vont lui permettre de continuer ses études dans les semestres S5 et S6 des cycles licences qui émanent de ce parcours tout en gardant la possibilité de se réorienter vers d’autres troncs communs comme MIPC et GE/GM.
        Également, ce tronc commun permet à l’étudiant de postuler à des concours d’accès aux cycles ingénieurs dispensés dans notre établissement et aussi à des concours nationaux ou internationaux des écoles d’ingénieurs.
    </p></div>
      </div>
      <div id="programme" class="contenu"  style="display:none;">
        <table>
        <tr>
<td style="font-weight: bold; border:2px solid #b6eb4d;">Semestre 1</td>
<td><ul>
    <li>Circuits électriques et électroniques</li><br>
         <li>Electricité</li><br>
        <li>Analyse 1 : Fonction d’une variable réelle</li><br>
        <li>Algèbre 1 : Polynômes et espaces vectoriels</li><br>
        <li>Algorithmique et Programmation 1</li><br>
        <li>Langues et Communication -LC1</li><br>

</ul></td>
      </tr>

      <tr>
        <td style="font-weight: bold; border:2px solid #b6eb4d;">Semestre 2</td>
        <td><ul>
            <li>Circuits électriques et électroniques</li><br>
                 <li>Electricité</li><br>
                <li>Analyse 1 : Fonction d’une variable réelle</li><br>
                <li>Algèbre 1 : Polynômes et espaces vectoriels</li><br>
                <li>Algorithmique et Programmation 1</li><br>
                <li>Langues et Communication -LC1</li><br>
        
        </ul></td>
              </tr>

              <tr>
                <td style="font-weight: bold; border:2px solid #b6eb4d;">Semestre 3</td>
                <td><ul>
                    <li>Circuits électriques et électroniques</li><br>
                         <li>Electricité</li><br>
                        <li>Analyse 1 : Fonction d’une variable réelle</li><br>
                        <li>Algèbre 1 : Polynômes et espaces vectoriels</li><br>
                        <li>Algorithmique et Programmation 1</li><br>
                        <li>Langues et Communication -LC1</li><br>
                
                </ul></td>
                      </tr>
               
                      <tr>
                        <td style="font-weight: bold; border:2px solid #b6eb4d;">Semestre 4</td>
                        <td><ul>
                            <li>Circuits électriques et électroniques</li><br>
                                 <li>Electricité</li><br>
                                <li>Analyse 1 : Fonction d’une variable réelle</li><br>
                                <li>Algèbre 1 : Polynômes et espaces vectoriels</li><br>
                                <li>Algorithmique et Programmation 1</li><br>
                                <li>Langues et Communication -LC1</li><br>
                        
                        </ul></td>
                              </tr>

        
      </table></div>
      <div id="coordinateur" class="contenu"  style="display:none;">
        <p style="font-size: 18px;">
            <strong style="font-size: 22px;">Coordinnateur pédagogique :</strong> Pr.Jbilou Mohammed  
        </p> <p style="font-size: 22px;">
            <img src="email.png" > : mjbilou@uae.ac.ma
          </p>
        
      </div>
</body>
</html>