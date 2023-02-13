<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
    <h3>front-page.php</h3>
    <section class="blocflex">
    <?php
        if (have_posts()): 
            while (have_posts()) : the_post(); ?>
            <article>
                <h2>
                    <a href="<?php echo get_permalink();?>"><?php echo get_the_title(); ?></a>
                </h2>
                <?php // the_content();  // affiche le contenu complet de l'article ?>
                <?php // the_excerpt();   // affiche un résumé de l'article ?>
                <p><?= wp_trim_words(get_the_excerpt(), 10, "&#10148;") ?></p>
            </article>   
            <?php endwhile;
        endif;    
    ?>
    </section>
</main>

<?php get_footer(); ?>