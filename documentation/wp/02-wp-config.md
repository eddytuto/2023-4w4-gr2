#### Le fichier wp-config.php

- Ce fichier est créé lors de l'**installation initiale de Wordpress**
- Le fichier** wp-config-sample.php** peut être utilisé pour créer nous même le fichier wp-config.php
- **wp-config.php** est un fichier de configuration **de la base de données de WordPress**.
- Il contient les informations de **connexion** à la base de données, telles que le nom d'utilisateur, le mot de passe et le nom de la base de données.
- Contient des paramètres de configuration tels que la **région** et les **clés de sécurité**.
- Il est utilisé pour se **connecter** à la base de données lorsque WordPress est exécuté et pour stocker les données nécessaires au fonctionnement du site.
- Il est important de protéger ce fichier car il contient des **informations sensibles**.

#### Voici quelques paramètres que vous pouvez configurer dans le fichier wp-config.php pour améliorer votre processus de développement sous WordPress :

- Activez le **mode de débogage** en définissant la constante WP_DEBUG sur true :

  - `define( 'WP_DEBUG', true );`
  - Cela affichera les **erreurs** et les **avertissements** dans votre site en développement, ce qui peut être utile pour identifier et corriger les problèmes.

- Désactivez l'éditeur de thème et de plugin en définissant la constante DISALLOW_FILE_EDIT sur true :
  - `define( 'DISALLOW_FILE_EDIT', true );`
  - Cela **empêchera** les utilisateurs de **modifier** les fichiers de votre thème ou de vos plugins via l'interface d'administration de WordPress. Cela peut être utile pour éviter les modifications non intentionnelles pendant le développement.
