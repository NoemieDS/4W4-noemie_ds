<?php

/**
 * Modèle category par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="site__main">
   <section class="blocflex">
      <?php
      $category = get_queried_object();
      //requête SQL de WP
      $args = array(
         'category_name' => $category->slug, //slug extrait le nom de la catégorie 
         'orderby' => 'title',
         'order' => 'ASC'
      );
      $query = new WP_Query($args); //2e requête
      if ($query->have_posts()) :
         while ($query->have_posts()) : $query->the_post(); ?>
            <?php  /* $category -> slug peut avoir une de ces 3 valeurs : cours, galerie, 4w4 */
            get_template_part('template-parts/categorie', $category->slug); ?>

         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata(); ?>
   </section>
</main>


<?php get_footer(); ?>