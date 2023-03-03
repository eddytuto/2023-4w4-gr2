<?php
/**
 * Modèle category par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="site__main">
    <code>category.php</code>
    <section class="blocflex">
      <?php
      $category = get_queried_object();
      $args = array(
         'category_name' => $category->slug,
         'orderby' => 'title',
         'order' => 'ASC'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
         while ( $query->have_posts() ) : $query->the_post(); ?>
         <?php
         /* $category->slug peut avoir une de ces deux valeurs : "cours" ou "4w4" */
          get_template_part('template-parts/categorie',$category->slug); ?>
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
   </section>
</main>


<?php get_footer(); ?>