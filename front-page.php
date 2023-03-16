<?php

/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="site__main no-aside">
  <h2>Les Timiens créent avec des ordinateurs</h2>
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
      $ma_categorie = "4w4";
      if (in_category('galerie')) {
        $ma_categorie = "galerie";
        get_template_part('template-parts/categorie', $ma_categorie);
      }
    endwhile;
  endif;
  ?>
  <section class="blocflex">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        /* 
        $la_categorie ='4w4';
        if (in_category('galerie')) {
          $la_categorie ='galerie';
         get_template_part('template-parts/categorie', $la_categorie); 
        }
        else {
          get_template_part('template-parts/categorie', $la_categorie); 
        } */
        if (in_category('4w4')) {
          get_template_part('template-parts/categorie', '4w4');
        }
      endwhile;
    endif;
    ?>
  </section>
</main>
<?php get_footer(); ?>