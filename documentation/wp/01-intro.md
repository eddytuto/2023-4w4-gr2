## Les étapes générales pour développer un thème WordPress

- Créez un dossier pour votre thème et y ajoutez les fichiers de base nécessaires :
  - **style.css**
  - **functions.php**
  - **index.php**. Est le modèle par défaut si aucun autre modèle parmi les modèles du thème ne satifait la requête « **http** »
- Définissez les **informations de base de votre thème** dans le fichier **style.css** :
  - ajoutez un en-tête de commentaires **directives Wordpress** contenant les informations de base de votre thème, telles que son nom, sa description, son auteur, etc.
  - Créez les fichiers de **modèle** « template » de base de votre thème : les fichiers **modèle** sont des fichiers HTML qui définissent la **structure** et le **design** de votre site.
  - Créez au moins un fichier **modèle** **index.php** pour votre site.
  - Ajoutez du code PHP dans vos fichiers modèle pour afficher le contenu de votre site : utilisez des **fonctions** WordPress et des **boucles** de contenu pour afficher les articles, les pages et les commentaires de votre site.
- Personnalisez votre thème en utilisant des **fonctions de personnalisation** et des **options de thème** : utilisez le fichier **functions.php** pour ajouter des fonctionnalités supplémentaires à votre thème, telles que des widgets, des menus de navigation et des options de personnalisation.
- **Testez et déboguez** votre thème : assurez-vous que votre thème fonctionne correctement en testant toutes les fonctionnalités et en recherchant d'éventuelles erreurs.
- Publiez votre thème : une fois que votre thème est prêt, vous pouvez le publier sur le **répertoire de thèmes de WordPress** ou le partager avec d'autres utilisateurs.

---

### Pour créer un thème WordPress, voici les étapes à suivre :

- Préparez les fichiers nécessaires : **css, js, images**, etc.
- Créez un répertoire pour votre thème dans le dossier **wp-content/themes** de votre installation WordPress.
- Créez un fichier **style.css** dans ce répertoire et y incluez les informations de base sur votre thème, telles que le nom et la description.
- Créez un fichier **index.php** qui sera le modèle par défaut.
- Utilisez les fonctions et les hooks WordPress pour personnaliser le comportement de votre thème.
- Ajoutez d'autres fichiers tels que "header.php" et "footer.php" pour définir la structure globale de votre thème.

---

### readme.md

- Permet de commenter un projet en utilisant la syntaxe « **Markdown** »
- **Visual Code** offre plusieurs extensions pour nous aider à éditer les fichiers **md** voici deux extensions que j'utilise
  - **Markdown Preview Enhanced** permet de visualiser l'apparance d'un fichier **.md**
  - `ctrl-shift v` Permet de visualiser le fichier **.md** dans un nouvel onglet de **VC**
  - **Markdownlint** permet de signaler les erreurs de syntaxe du code **md**

---

### style.css

- style.css est un fichier **obligatoire** pour définir un thème.
- style.css permet de **créer le lien** entre **Wordpress** et le **thème**.
- Ce lien est créé par une **directive WP** dont le contenu est situé à l'intérieur d'un **commentaire CSS**.
- style.css contient une déclaration wp contenant plusieurs **attributs** qui seront utilisés pour le fonctionnement et la description du thème.
- style.css contient les règles de style permettant de **préciser, compléter ou décliner** les règles de styles CSS que l'on utilise par défaut dans les blocs Gutenberg.
- **[developer.wordpress.org style.css](https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/)**

---

### Le fichier screenshot.png

Est une **image** qui représente un **aperçu de l'apparence de votre thème** dans l'administration de WordPress. Il est généralement utilisé pour montrer à l'utilisateur comment le thème sera affiché sur son site. Les caractéristiques de ce fichier sont les suivantes :

- Il doit être nommé **screenshot.png** pour être reconnu par WordPress
- Il doit être placé dans le **répertoire racine** de votre thème.
- Il doit être de taille **800x600 pixels ou plus grand**.
- Il doit être en format **PNG** pour une qualité d'image optimale.
- Il doit montrer une capture d'écran de l'**apparence de votre thème** sur un site web
- Il est important de noter que ce fichier est **facultatif** et n'est pas nécessaire pour que votre thème fonctionne, mais il est fortement recommandé pour une meilleure présentation de votre thème dans la liste des thèmes disponibles dans l'administration WordPress.

---

### Le fichier functions.php

Le fichier functions.php d'un thème WordPress est utilisé pour **ajouter des fonctionnalités personnalisées** à votre thème, telles que des **widgets, des menus, des styles et des scripts**. Il est généralement utilisé pour ajouter des fonctions qui **étendent les fonctionnalités de base de WordPress**. Voici comment définir le fichier functions.php de votre thème :

- Créez un fichier nommé "functions.php" dans le **répertoire racine de votre thème**.
- Ajoutez le code PHP nécessaire pour ajouter les fonctionnalités personnalisées souhaitées.
- Utilisez les fonctions et les hooks WordPress pour personnaliser le comportement de votre thème.

---
