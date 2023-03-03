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
            while (have_posts()) : the_post(); 
                if (in_category('galerie')){
                 //get_template_part("template-parts/categorie", "galerie");
                 the_content();
                }
                else {
                    get_template_part("template-parts/categorie", "4w4");  
                }
             endwhile;
        endif;    
    ?>
    </section>
</main>

<?php get_footer(); ?>