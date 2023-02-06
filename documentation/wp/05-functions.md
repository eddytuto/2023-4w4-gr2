## functions.php

- Le fichier functions.php est un fichier de **personnalisation** de votre **thème**.
- Il permet de définir de **nouvelles fonctionnalités**, de **surcharger les fonctionnalités** existantes ou de **supprimer des fonctionnalités inutiles**.
- Il permet d'utiliser des **hooks** pour créer des nouvelles fonctionnalités ou étendre les fonctionnalités existente.
- Il permet:
  - d'ajouter des **scripts et des styles dans le code HTMl **de la la page WP (**wp_enqueue_script ou wp_enqueue_style**).
  - définir des **widgets**.
  - définir des **menus**.
  - définir des **options** de thème.
  - définir des **shortcodes**.

---

### Un hook de Wordpress

- un hook est une sorte d'**événement** qui permet de **déclencher** des **fonctions spécifiques** lorsque des **actions standard** de WordPress sont **exécutées**, permettant de **personnaliser le comportement** de WordPress.
- Les hooks sont des **points précis dans le code où vous pouvez ajouter ou surcharger des fonctionnalités** en enregistrant vos propres fonctions pour être exécutées. Les **actions standard** de WordPress sont déjà définies dans le coeur de WordPress, et vous pouvez les utiliser pour **étendre** les fonctionnalités de WordPress sans avoir à modifier le code de WordPress lui-même.

---

### add_action()

```
// Définition de la fonction à exécuter
// lorsque le hook est déclenché
function mon_code_a_executer() {
    echo 'Mon code à exécuter';
}

// Enregistrement de la fonction pour être
// exécutée lorsque le hook est déclenché
add_action( 'mon_hook', 'mon_code_a_executer' );
```

---

### add_filter()

```
// Définition de la fonction
// à exécuter lorsque le hook est déclenché
function mon_filtre( $donnees ) {
    return 'Données modifiées : ' . $donnees;
}
```

---

### Le hook « the title »

- Le hook « the title » se manifeste quand la fonction the_title() s'exécute

```
// Enregistrement de la fonction pour
//  être exécutée lorsque le hook est déclenché
add_filter( 'mon_hook', 'mon_filtre' );


function mon_filtre_de_titre( $titre, $format ) {
    if( $format == 'raw' ){
        return 'Titre brut : ' . $titre;
    }else {
        return 'Modification du titre : ' . $titre;
    }
}
add_filter( 'the_title', 'mon_filtre_de_titre', 10, 2 );
```

- Dans cet exemple, on utilise les** deux paramètres de la fonction the_title()**, $titre et $format, pour effectuer des opérations différentes selon la valeur de $format.

- Il est important de noter que la plupart des points d'accrochage WordPress passent des variables différentes, selon le contexte où ils sont utilisés, il est donc toujours bon de vérifier la documentation pour savoir quelles variables sont passées en argument lorsque vous utilisez un point d'accrochage.

---

### Voici une liste non exhaustive de 10 principaux hooks de WordPress :

- **the_content** : Ce hook est déclenché lorsque le contenu d'un post est affiché. Il permet de filtrer ou de modifier le contenu avant qu'il ne soit affiché à l'écran.
- **wp_head** : Ce hook est déclenché dans l'en-tête de chaque page. Il permet d'ajouter des scripts, des feuilles de style et des métadonnées.
- **wp_footer** : Ce hook est déclenché avant la fermeture de la balise <body> de chaque page. Il permet d'ajouter des scripts et des éléments de tracking.
- **comment_form** : Ce hook est déclenché lorsque le formulaire de commentaire est affiché. Il permet de modifier le contenu du formulaire ou d'ajouter des champs supplémentaires.
- **the_title** : Ce hook est déclenché lorsque le titre d'un post est affiché. Il permet de filtrer ou de modifier le titre avant qu'il ne soit affiché à l'écran.
- **widgets_init** : Ce hook est déclenché lorsque les widgets sont initialisés. Il permet de créer de nouveaux widgets ou de surcharger les widgets existants.
- **login_form** : Ce hook est déclenché lorsque le formulaire de connexion est affiché. Il permet de modifier le contenu du formulaire ou d'ajouter des champs supplémentaires.
- **wp_enqueue_scripts** : Ce hook est déclenché lorsque les scripts et les feuilles de style sont enregistrés. Il permet de charger des scripts et des feuilles de style supplémentaires.
- **admin_init** : Ce hook est déclenché lorsque l'administration de WordPress est initialisée. Il permet de créer des options de configuration et de surcharger les options existantes.
- **save_post** : Ce hook est déclenché lorsqu'un post est enregistré ou mis à jour. Il permet de sauvegarder des données supplémentaires ou de mettre à jour des données existantes lors de la sauvegarde d'un post.

---

### wp_enqueue_style

- https://developer.wordpress.org/reference/functions/wp_enqueue_style/

- **wp_enqueue_style()** est une fonction WordPress qui permet d'enregistrer et de charger une feuille de style dans un thème ou un plugin. Cette fonction prend en entrée les paramètres suivants :

- **handle** : un nom unique pour identifier la feuille de style.
- **source** : l'emplacement de la feuille de style.
- **dependencies** : les dépendances de la feuille de style (autres feuilles de style qui doivent être chargées avant celle-ci)
- **version** : la version de la feuille de style.
- **media** : le type de média pour lequel la feuille de style est destinée (exemple : 'screen', 'print', etc.)
- La fonction **wp_enqueue_style()** est généralement utilisée dans un **hook** **wp_enqueue_scripts** pour charger les feuilles de style dans un thème ou un plugin. C'est un moyen pratique pour charger des feuilles de style de manière sécurisée et organisée.

---

### wp_enqueue_script

- **wp_enqueue_script()** est une fonction WordPress qui permet d'enregistrer et de charger un script JavaScript dans un thème ou un plugin. Cette fonction prend en entrée les paramètres suivants:
- **handle** : un nom unique pour identifier le script.
- **source** : l'emplacement du script.
- **dependencies** : les dépendances du script (autres scripts qui doivent être chargés avant celui-ci)
- **version** : la version du script.
- **in_footer** : un booléen qui indique si le script doit être chargé dans l'en-tête ou dans le pied de page de la page.
- La fonction **wp_enqueue_script()** est généralement utilisée dans un hook wp_enqueue_scripts pour charger les scripts JavaScript dans un thème ou un plugin. C'est un moyen pratique pour charger des scripts de manière sécurisée et organisée. Il est important de noter que l'utilisation de cette fonction assure que les scripts ne seront pas chargés plusieurs fois et qu'ils seront chargés dans l'ordre de leurs dépendances.

---

### Exemple d'enfilement de style et de script

```
// Enfiler la feuille de style
function ajouter_styles() {
    wp_enqueue_style(
        'mon-style',
        get_template_directory_uri() . '/css/mon-style.css',
        array(),
        '1.0',
        'all' );
}
add_action( 'wp_enqueue_scripts', 'ajouter_styles' );

// Enfiler le fichier JavaScript
function ajouter_scripts() {
    wp_enqueue_script(
        'mon-script',
         get_template_directory_uri() . '/js/mon-script.js',
         array(),
         '1.0',
         true );
}
add_action( 'wp_enqueue_scripts',
            'ajouter_scripts' );
```

---

### Enfilement style et script à partir de la même fonction

```
/**
 * Une autre approche pour enfiler
 * une feuille de style et un fichier js
 */
function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'style-name',
        get_stylesheet_uri() );
	wp_enqueue_script( 'script-name',
        get_template_directory_uri() . '/js/example.js',
        array(),
        '1.0.0',
        true );
}
add_action(  'wp_enqueue_scripts',
             'wpdocs_theme_name_scripts' );
```

---

### Pour enfiler la dernière version du fichier css

```
wp_enqueue_style(
    'main-styles',
    get_template_directory_uri() . '/css/style.css',
    array(),
    filemtime(get_template_directory() . '/css/style.css'));
```

---

### Comment enregistrer les menus

-

### Comment ajouter des options spécifiques au theme

- La fonction **add_theme_support()** est utilisée pour ajouter des fonctionnalités spécifiques à un thème WordPress.
- https://developer.wordpress.org/reference/functions/add_theme_support/

---

### Les différentes options qui peuvent être ajoutées

- **Les images à la une** : pour utiliser les images à la une, vous pouvez utiliser **add_theme_support( 'post-thumbnails' )**;
- **Les formats de post** : pour utiliser des formats de post tels que les articles en vedette ou les articles en galerie, vous pouvez utiliser:
- **add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );**
- **Les menus personnalisés** : pour utiliser des menus personnalisés, vous pouvez utiliser **add_theme_support( 'menus' )**;
- **Les widgets personnalisés** : pour utiliser des widgets personnalisés, vous pouvez utiliser **add_theme_support( 'widgets' );**
- **Les thèmes enfants** : pour utiliser des thèmes enfants, vous pouvez utiliser **add_theme_support( 'child-theme-override' )**;
- Il est important de noter que pour utiliser la fonction **add_theme_support()** il faut l'utiliser dans un _hook_ **after_setup_theme** pour s'assurer qu'elle est exécutée après l'initialisation du thème.

---

### Propriété de add_theme_support

- 'admin-bar'
- 'align-wide'
- 'automatic-feed-links'
- 'core-block-patterns'
- 'custom-background'
- 'custom-header'
- 'custom-line-height'
- 'custom-logo'
- 'customize-selective-refresh-widgets'
- 'custom-spacing'
- 'custom-units'
- 'dark-editor-style'
- 'disable-custom-colors'
- 'disable-custom-font-sizes'
- 'editor-color-palette'
- 'editor-gradient-presets'
- 'editor-font-sizes'
- 'editor-styles'
- 'featured-content'
- 'html5'
- 'menus'
- 'post-formats'
- 'post-thumbnails'
- 'responsive-embeds'
- 'starter-content'
- 'title-tag'
- 'wp-block-styles'
- 'widgets'
- 'widgets-block-editor'

---
