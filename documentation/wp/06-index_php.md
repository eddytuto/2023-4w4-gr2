### Le fichier index.php

- Est un modèle par défaut dans un thème WordPress.
- Il est utilisé comme modèle principal pour afficher les articles de votre site sur la page d'accueil ou tout autre page de votre similar_text

---

### Quelques fonctions de index.php

- **get_header()** : Cette fonction permet d'inclure le fichier header.php dans la page actuelle, ce qui permet de définir la structure de l'en-tête de votre site.
- **get_footer()** : Cette fonction permet d'inclure le fichier footer.php dans la page actuelle, ce qui permet de définir la structure du pied de page de votre site.
- **have_posts()** : Cette fonction permet de vérifier si il y a des articles à afficher dans la boucle WordPress actuelle.
- **the_post()** : Cette fonction permet de charger les informations d'un article à afficher dans une boucle WordPress.
- **the_permalink()** : Cette fonction permet d'afficher l'URL permanente d'un article.
- **the_title()** : Cette fonction permet d'afficher le titre d'un article.
- **the_content()** : Cette fonction permet d'afficher le contenu d'un article.
- **the_excerpt()** : Cette fonction permet d'afficher un extrait (résumé) d'un article.
- **get_the_excerpt()** : Cette fonction permet de récupérer un extrait (résumé) d'un article sans l'afficher.
- **wp_trim_words( $text, $num_words, $more, $original_text )**
