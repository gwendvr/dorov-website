# Site Web Dorov

Site web officiel du jeu d'horreur psychologique Dorov.

## Structure du projet

```
src/
├── assets/         # Ressources statiques (images, etc.)
│   └── images/     # Images du site
├── components/     # Composants réutilisables
│   ├── header.html
│   └── footer.html
├── js/            # Fichiers JavaScript
│   └── app.js     # Script principal
├── pages/         # Pages HTML
│   ├── index.html
│   ├── mentions-legales.html
│   ├── politique-confidentialite.html
│   ├── conditions-utilisation.html
│   └── cookies.html
└── styles.css     # Styles CSS
```

## Installation

1. Clonez ce dépôt
2. Installez un serveur web local (par exemple avec Python) :
   ```bash
   # Si vous avez Python 3 installé
   python -m http.server 8000
   ```
3. Ouvrez votre navigateur et accédez à `http://localhost:8000/src/pages/index.html`

## Technologies utilisées

- HTML5
- CSS3
- JavaScript (Alpine.js pour la gestion du menu mobile)
- Fonts : Creepster, Roboto

## Développement

Le site utilise une architecture modulaire avec des composants réutilisables. Les modifications du header ou du footer se font dans les fichiers correspondants du dossier `components/`. 