<html>
<head>
  <title>Licence</title>
  <script src="../fichierjavascript/fst.js"></script>
  <style>
 #titre1{
  font-family: sans-serif;
  font-weight: bold;
  max-width: 100%;
  height: 150px;
  font-size: 30px;
  color: white;
  text-align: center;
  background-position: 40% 60%;
  background-image: url("../iamges_projet/fstt.png");
  background-repeat: no-repeat;
  
}
  #titre2{
    font-family: sans-serif;
    font-weight: bold;
    color:  rgb(10, 58, 130);
    border: 3px solid rgb(16, 104, 186);
    background-color:#FFFFFF;
    width:0%;
 
  }
    .body1{
      width: auto;
      margin-left: 60px;
    }
.card-container {
  margin: 5%;
  width: 70%;
  margin-left: 10%;
  height: 25%;
  position: relative;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(10, 66, 198, 0.854); 
 
}

.card-container::before {
  content: "";
  z-index: -1;
  position: absolute;
  inset: 0;
  background: linear-gradient(-35deg,#147259 20%, #006387 80%  );
  transform: translate3d(0, 0, 0) scale(0.95);
  filter: blur(20px);
}

.card {
  width: 100%;
  height: 100%;
  border-radius: inherit;
  overflow: hidden;
}

.card .img-content {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  background: linear-gradient(-40deg, #147259 20%, #006387 80% , rgb(11, 65, 116) 80%);
  transition: scale 0.6s, rotate 0.6s, filter 1s;
}


.img-content{
    font-size: 40px;
}

.card .content {
  position: absolute;
  top: 0;
  left: 0; 
  margin-left: 20%;
  height: 80%;
  display: flex;
  color: white;
  opacity: 0;
  pointer-events: none;
  transform: translateY(30px);
  transition: all 0.7s cubic-bezier(0.23, 1, 0.320, 1);
}

.card .content .heading {
  font-size: 32px;
  font-weight: 700;
 text-align: center;
 
}

.card:hover .content {
  opacity: 1;
  transform: translateY(0);
}

.card:hover .img-content {
    color: #0d317f;
  scale: 4;
  rotate: 30deg;
  filter: blur(7px);
  
}

  </style>
</head>
<body>
    <pre id="titre1"><br><br>LICENCE</pre>
    <div class="body1" id="contenuAchanger">
  <h2 ><pre id="titre2" >  Departement Informatique</pre></h2>

  <div class="card-container">
    <div class="card">
    <div class="img-content" onclick="chargerContenu('IDAI')">
     IDAI
    </div>
    <div class="content">
      <p class="heading" style="margin-right: 18%;">Ingénierie de développement d’applications informatiques</p>
      
    </div>
  </div>
  </div>
  
  <div class="card-container">
    <div class="card">
    <div class="img-content">
   AD
    </div>
    <div class="content">
      <p class="heading">Analytique des données</p>
     
    </div>
  </div>
  </div>
  <h2 ><pre id="titre2">  Departement Mathematique</pre></h2>
  <div class="card-container">
    <div class="card">
    <div class="img-content">
    MID
    </div>
    <div class="content">
      <p class="heading">Mathématiques et Informatique Décisionnelles</p>
     
    </div>
  </div>
  </div>

  <div class="card-container">
    <div class="card">
    <div class="img-content">
    SSD
    </div>
    <div class="content">
      <p class="heading">Statistique et Science des données</p>
     
    </div>
  </div>
  </div>

   </div>
  </body></html>