## Développement de la structure Sass pour un thème Wordpress

### Les raisons d'utiliser Sass en développement de thème

Il y a plusieurs raisons pour lesquelles il peut être avantageux d'utiliser Sass dans le développement de sites WordPress :

- **Organisation du code** : Sass permet de structurer et d'organiser le code CSS en utilisant des fonctionnalités telles que les variables, les mixins et les boucles, ce qui peut rendre le code plus facile à maintenir et à réutiliser.
- **Productivité** : Sass permet de gagner du temps en automatisant certaines tâches répétitives, comme la génération de code CSS à partir de variables prédéfinies ou en utilisant des mixins pour éviter de réécrire du code.
- **Personnalisation **: Sass permet de personnaliser facilement le thème WordPress en utilisant des variables pour changer rapidement les couleurs, les polices et d'autres propriétés de style.
- **Prise en charge des navigateurs** : Sass permet de générer du code CSS compatible avec les navigateurs les plus récents, ce qui est particulièrement utile pour les projets WordPress qui doivent prendre en charge une grande variété de navigateurs.
- **Intégration avec les outils de développement** : Sass peut être facilement intégré à des outils de développement tels que Grunt ou gulp, permettant une automatisation de tâches pour optimiser les performances du site.

---

### Quelques instructions utiles en Sass

Voici quelques instructions de base pour utiliser SCSS (Sass indente) :

- **Variables** : Les variables SCSS permettent de stocker des valeurs pour une utilisation ultérieure dans le code. On peut les définir en utilisant le signe dollar suivi du nom de la variable. Exemple :
  `$primary-color: #ff0000;`

- **Mixins** : Les mixins SCSS permettent de regrouper des règles CSS pour une utilisation répétitive. On peut les définir en utilisant le mot-clé @mixin suivi d'un nom de mixin. Exemple :

```
  @mixin border-radius {
  border-radius: 5px;
  }
```

```
/* /////////////////////////////////////////////////////////////////      mixin général pour les liens */
@mixin links($couleur, $couleur--visited, $couleur--hover) {
  color: $couleur;

  &:visited {
    color: $couleur--visited;
  }

  &:hover,
  &:focus,
  &:active {
    color: $couleur--hover;
  }

  &:focus {
    outline: thin dotted;
  }

  &:hover,
  &:active {
    outline: 0;
  }
}
```

- **Inclusions** : Les inclusions SCSS permettent d'inclure les règles d'un mixin dans un autre en utilisant le mot-clé @include suivi du nom du mixin. Exemple :

```
.my-element {
 @include border-radius;
 }
```

- **Boucles** : Les boucles SCSS permettent de répéter des règles CSS à l'aide de boucles. On peut utiliser les boucles pour générer des règles CSS à partir de variables. Exemple :

```
  @for $i from 1 through 5 {
    .item -#{$i} {
    width: 2em \* $i;
    }
  }
```

- **Conditions** : Les conditions SCSS permettent de conditionner l'application de règles CSS en fonction d'une valeur. On peut utiliser les conditions pour générer des règles CSS à partir de variables. Exemple :

```
 @if $custom-variable == true {
   .my-element {
   background-color: #ff0000;
  }
 }
```

Ce sont des instructions de base de SCSS, il existe d'autres fonctionnalités et instructions avancées qui peuvent être utilisées pour rendre le développement plus efficace et facile à maintenir.

- La documentation officielle de Sass est disponible sur le site web suivant :
- https://sass-lang.com/documentation

---

### Pourquoi utilser le fichier normalize.css

Il y a plusieurs raisons pour lesquelles il peut être avantageux d'utiliser normalize.css dans un projet :

- **Consistance des styles** : normalize.css permet d'établir une base commune pour les styles entre différents navigateurs, ce qui peut aider à éviter les incohérences de styles et améliorer l'expérience utilisateur.
- **Amélioration de l'accessibilité **: normalize.css comprend des règles CSS qui peuvent améliorer l'accessibilité, comme l'ajout d'un espace entre les boutons et leur contenu, ou l'application d'une taille de police minimale pour les éléments de forme.
- **Optimisation de la compatibilité** : normalize.css est conçu pour être compatible avec une grande variété de navigateurs, y compris les versions anciennes, ce qui peut aider à éviter les problèmes de compatibilité.
- **Base pour des styles personnalisés** : normalize.css peut être utilisé comme base pour des styles personnalisés, en fournissant une sélection de styles de base qui peuvent être facilement redéfinis ou surchargés.
- **Simplicité d'utilisation** : normalize.css est facile à utiliser et à intégrer dans un projet, il suffit de l'inclure dans le header du document HTML et il s'applique automatiquement aux éléments de la page.

---

### Quelle version de normalize.scss faut-il utiliser

- Il est généralement recommandé d'utiliser la **dernière version stable** de normalize.css disponible
- Le **site officiel** : https://necolas.github.io/normalize.css/
- Il est important de vérifier régulièrement s'il y a des mises à jour et de les installer pour bénéficier des dernières corrections de bugs et améliorations.

---

### Organisation de la structure Sass pour notre thème

Il est important de noter que cette liste est une suggestion et que l'organisation peut varier en fonction des besoins spécifiques de votre thème. Il est important de maintenir un ordre logique et clair pour faciliter la maintenance et l'évolution du thème.

- **_sass/_** : Le répertoire principal de stockage des fichiers Sass, y compris les fichiers de base et les fichiers partiels.
- **_sass/variables_** : Le répertoire des fichiers contenant les variables scss utilisé dans d'autres fichiers scss. Définir les couleurs, les tailles de police et les dimensions communes utilisées dans le thème.
- **_sass/normalize_** : le répertoure des fichier normalize et box-sizing
- **_sass/base/_** : Le répertoire pour stocker les fichiers de styles de base tels que les styles de typographie, les styles de grille, les styles de boutons, etc.
- **_sass/composants/_** : Le répertoire pour stocker les styles de composants réutilisables tels que les styles de barre de navigation, les styles de boutons, les styles de formulaire, etc.
- **_sass/layout/_** : Le répertoire pour stocker les styles de disposition tels que les styles de grille, les styles de mise en page, etc.
- le fichier **_style.scss_** : Le fichier principal .scss qui contiendra les instruction d'importation de l'ensemble des fichiers .scss de notre structure Sass

---

### Le fichier \_heading.scss

- Chaque fichier **_.scss_** doit commencer par le caractère ** «\_»** pour empècher que les fichiers scss soient compilé en fichier **_.css._** On veut plutôt créer un seul fichier **_style.css_** qui contiendra l'importation de chacune des **_complations_** des fichiers **_.scss_** de la **_structure Sass globale_**.

```
h1 {
  font-size: clamp(0.75rem, -0.75rem + 4.8vw, 3.75rem);
}
h2 {
  font-size: clamp(0.625rem, -0.3125rem + 3vw, 2.5rem);
}
h3 {
  font-size: clamp(0.5625rem, -0.25rem + 2.6vw, 2.1875rem);
}
h4 {
  font-size: clamp(0.5rem, -0.1875rem + 2.2vw, 1.875rem);
}
h5 {
  font-size: clamp(0.5rem, -0.0313rem + 1.7vw, 1.5625rem);
}
h6 {
  font-size: clamp(0.5rem, 0.125rem + 1.2vw, 1.25rem);
}

P {
  font-size: clamp(0.5rem, 0.125rem + 1.2vw, 1.1rem);
}

h1 {
  font-family: Impact, Haettenschweiler, "Arial Narrow Bold", sans-serif;
}

h2 {
  font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
  /* font-family: "Slackey", cursive; */
}

h3,
h4,
h5,
h6 {
  font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
}

p {
  font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
    "Lucida Sans", Arial, sans-serif;
}
```

### Exemple du fichier style.scss

```
/*
Theme Name: 2023-4w4
Theme URI: https://referenced.ca
Author: Eddy Martin
Author URI: https://wordpress.org/
Description:U thèeme de base qui nous permettra d'apprendre les rudiments de la création de thèeme
Tags: blog, one-column, custom-background, custom-colors, custom-logo, custom-menu, editor-style, featured-images, footer-widgets, full-width-template, rtl-language-support, sticky-post, theme-options, threaded-comments, translation-ready, block-styles, wide-blocks, accessibility-ready
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: 2023-4w4
*/

@import "variables/dimension";
@import "normalize/normalize";
@import "normalize/box-sizing";

/* --------------------------------------------- base */
@import "base/heading";
@import "base/espacement";
@import "base/lien";
@import "base/list";

/* --------------------------------------------- composant */
@import "composant/entete";
```

---
