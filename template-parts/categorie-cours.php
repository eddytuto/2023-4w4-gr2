<?php 
/**
 * Template part pour afficher un blocflex article cours 
*/
$titre = get_the_title();
$sigle = substr($titre,0,7); // 582-1w1 - Mise en page web
$titre_long = substr($titre,7,-5); // 582-1w1 Mise en ... (60h)
$duree = "60"
// strpos($titre, '(') permet de trouver la position dy caractère ,'('
?> 

<article class="blocflex__article">  
    <h3><a href="<?php the_permalink(); ?>"> <?= $sigle ?></a></h3>
    <h5><?= $titre_long ?></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <h5><?= $duree ?></h5>
</article>