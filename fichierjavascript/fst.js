
  function afficherContenu(idContenu) {
    // Masquer tous les contenus
    var tousLesContenus = document.getElementsByClassName('contenu');
    for (var i = 0; i < tousLesContenus.length; i++) {
      tousLesContenus[i].style.display = 'none';
    }
  
    // Afficher le contenu correspondant à l'élément cliqué
    var contenu = document.getElementById(idContenu);
    contenu.style.display = 'block';
  }
  
  function chargerContenu(page) {
    const url = `${page}.php`;
  
    fetch(url)
      .then(response => response.text())
      .then(contenuHTML => {
        document.querySelector("#contenuAchanger").innerHTML = contenuHTML;
      })
      .catch(error => {
        console.error("Erreur lors du chargement du contenu :", error);
      });
  }
  