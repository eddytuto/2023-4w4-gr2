<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
<h3>single.php</h3>
<?php
    if (have_posts()): 
        while (have_posts()) : the_post();
            the_title('<h1>','</h1>');
            the_content(); ?>
            <hr>
        <?php endwhile;
    endif;
?>
</main>

<?php get_footer(); ?>