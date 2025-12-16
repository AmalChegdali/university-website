# Site Universitaire Web

Site web universitaire développé avec PHP, HTML, CSS et JavaScript pour présenter les informations, services et ressources d'une institution universitaire.

## 📋 Description

Ce projet présente un site web complet pour une institution universitaire, développé avec les technologies web classiques. Il offre une interface moderne et intuitive pour présenter les informations académiques, les services étudiants, les ressources pédagogiques et faciliter la communication entre l'université et ses étudiants.

## 🎯 Objectifs du Projet

- **Présenter l'institution** : Informations sur l'université, ses programmes et ses services
- **Faciliter l'accès aux informations** : Navigation intuitive vers les ressources académiques
- **Améliorer la communication** : Interface pour les annonces et actualités
- **Offrir des services en ligne** : Portail pour les services étudiants
- **Design responsive** : Accessible sur tous les types d'appareils

## 🚀 Fonctionnalités Principales

- ✅ **Page d'accueil** : Présentation de l'université et actualités
- ✅ **Informations académiques** : Programmes, formations, cursus
- ✅ **Services étudiants** : Inscription, résultats, documents
- ✅ **Actualités et annonces** : Communication avec les étudiants
- ✅ **Contact** : Formulaire de contact et informations
- ✅ **Design responsive** : Adaptation à tous les écrans
- ✅ **Navigation intuitive** : Menu et structure claire

## 🛠️ Technologies Utilisées

### Backend
- **PHP** - Langage de programmation serveur
- **Architecture MVC** - Organisation du code (si applicable)

### Frontend
- **HTML5** - Structure sémantique des pages
- **CSS3** - Styles, animations et design responsive
- **JavaScript** - Interactivité et fonctionnalités dynamiques

### Base de Données
- **MySQL** ou **PostgreSQL** - Base de données relationnelle (si applicable)

## 📁 Structure du Projet

```
SiteUniversitaire/
│
├── fichierhtml/               # Fichiers HTML
│   ├── index.html            # Page d'accueil
│   ├── about.html            # À propos
│   ├── programs.html         # Programmes académiques
│   ├── services.html         # Services étudiants
│   ├── contact.html          # Contact
│   └── [autres pages].html   # Autres pages
│
├── fichiercss/               # Feuilles de style CSS
│   ├── style.css             # Styles principaux
│   ├── responsive.css        # Styles responsive
│   └── [autres fichiers].css # Autres styles
│
├── fichierjavascript/        # Fichiers JavaScript
│   ├── main.js               # Script principal
│   ├── navigation.js         # Navigation
│   └── [autres fichiers].js  # Autres scripts
│
├── iamges_projet/            # Images du projet
│   ├── logo.png              # Logo universitaire
│   ├── photos/               # Photos
│   └── icons/                # Icônes
│
├── includes/                 # Fichiers PHP inclus (si applicable)
│   ├── header.php            # En-tête
│   ├── footer.php            # Pied de page
│   └── config.php            # Configuration
│
└── README.md                 # Documentation du projet
```

## 🚀 Installation et Configuration

### Prérequis

- **Serveur web** : Apache, Nginx, ou serveur PHP intégré
- **PHP 7.4+** : Langage de programmation serveur
- **Base de données** : MySQL ou PostgreSQL (si applicable)
- **Navigateur moderne** : Chrome, Firefox, Safari, Edge

### Installation

1. **Cloner le dépôt**
   ```bash
   git clone https://github.com/AmalChegdali/university-website.git
   cd university-website
   ```

2. **Configurer le serveur web**

   **Option 1 : Serveur PHP intégré (développement)**
   ```bash
   php -S localhost:8000
   ```

   **Option 2 : Apache/Nginx**
   - Copier les fichiers dans le répertoire `htdocs` ou `www`
   - Configurer le serveur pour pointer vers le répertoire du projet

3. **Configurer la base de données** (si applicable)
   ```sql
   -- Créer la base de données
   CREATE DATABASE site_universitaire;
   
   -- Importer le schéma (si fichier SQL fourni)
   mysql -u username -p site_universitaire < database.sql
   ```

4. **Configurer les fichiers de configuration**
   ```php
   // Modifier config.php ou includes/config.php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'site_universitaire');
   define('DB_USER', 'votre_username');
   define('DB_PASS', 'votre_password');
   ```

5. **Accéder au site**
   - Ouvrir un navigateur
   - Aller à `http://localhost:8000` (serveur PHP intégré)
   - Ou à l'URL configurée sur votre serveur web

## 🎨 Personnalisation

### Modifier le contenu

- **Pages HTML** : Modifier les fichiers dans `fichierhtml/`
- **Styles** : Personnaliser les fichiers CSS dans `fichiercss/`
- **Fonctionnalités** : Ajouter du JavaScript dans `fichierjavascript/`

### Changer les couleurs

Les couleurs principales peuvent être modifiées dans les fichiers CSS :
```css
:root {
  --primary-color: #votre-couleur;
  --secondary-color: #votre-couleur;
  --accent-color: #votre-couleur;
}
```

### Ajouter des pages

1. Créer un nouveau fichier HTML dans `fichierhtml/`
2. Ajouter le lien dans le menu de navigation
3. Créer les styles spécifiques si nécessaire

## 📱 Responsive Design

Le site est conçu pour être responsive et s'adapter à :
- **Desktop** : Écrans larges (1920px+)
- **Tablette** : Écrans moyens (768px - 1024px)
- **Mobile** : Petits écrans (320px - 767px)

## 🔐 Sécurité

- Validation des entrées utilisateur
- Protection contre les injections SQL (si base de données)
- Échappement des données affichées
- Protection CSRF pour les formulaires
- Validation côté serveur et client

## 📊 Fonctionnalités Avancées

- **Recherche** : Fonctionnalité de recherche sur le site
- **Formulaires** : Formulaires de contact et d'inscription
- **Galerie** : Galerie d'images des événements
- **Actualités** : Système de gestion des actualités
- **Multilingue** : Support de plusieurs langues (si implémenté)

## 🧪 Tests

Pour tester le site :

1. **Vérifier la compatibilité des navigateurs**
   - Chrome, Firefox, Safari, Edge

2. **Tester le responsive**
   - Utiliser les outils de développement du navigateur
   - Tester sur différents appareils

3. **Tester les formulaires**
   - Vérifier la validation
   - Tester l'envoi des données

## 📚 Documentation

### Structure des fichiers

- **HTML** : Structure et contenu des pages
- **CSS** : Présentation et styles
- **JavaScript** : Interactivité et fonctionnalités
- **PHP** : Logique serveur et traitement des données

### Navigation

Le menu de navigation permet d'accéder à :
- Accueil
- À propos
- Programmes
- Services
- Actualités
- Contact

## 🤝 Contribution

Les contributions sont les bienvenues ! Pour contribuer :

1. Fork le projet
2. Créez votre branche (`git checkout -b feature/AmazingFeature`)
3. Committez vos changements (`git commit -m 'Add some AmazingFeature'`)
4. Push vers la branche (`git push origin feature/AmazingFeature`)
5. Ouvrez une Pull Request

## 📄 Licence

Ce projet est sous licence personnelle. Tous droits réservés.

## 👤 Auteur

**Amal Chegdali**

- GitHub: [@AmalChegdali](https://github.com/AmalChegdali)
- LinkedIn: [Amal Chegdali](https://www.linkedin.com/in/amal-chegdali-37a5b9239/)
- Email: a.chegdali01@gmail.com

## 🙏 Remerciements

- Communauté PHP pour les ressources et le support
- Tous les contributeurs open-source
- Bibliothèques et frameworks utilisés

## 📚 Ressources

- [Documentation PHP](https://www.php.net/docs.php)
- [Documentation HTML](https://developer.mozilla.org/fr/docs/Web/HTML)
- [Documentation CSS](https://developer.mozilla.org/fr/docs/Web/CSS)
- [Documentation JavaScript](https://developer.mozilla.org/fr/docs/Web/JavaScript)

## 🗺️ Roadmap

- [ ] Amélioration de l'interface utilisateur
- [ ] Ajout de nouvelles fonctionnalités
- [ ] Optimisation des performances
- [ ] Amélioration de la sécurité
- [ ] Ajout de tests automatisés
- [ ] Support multilingue complet
- [ ] Intégration d'un système de gestion de contenu (CMS)
- [ ] Amélioration de l'accessibilité

## ⚠️ Notes Importantes

- Assurez-vous que PHP est correctement configuré sur votre serveur
- Vérifiez les permissions des fichiers et dossiers
- Configurez correctement la base de données si utilisée
- Testez le site sur différents navigateurs et appareils
- Sauvegardez régulièrement vos données

---

⭐ Si ce projet vous a été utile, n'hésitez pas à lui donner une étoile !
