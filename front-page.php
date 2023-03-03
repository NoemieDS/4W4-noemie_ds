<?php

/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
  <h2 class="front__titre">Les derniers articles de front-page.php</h2>

  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();

      if (in_category('galerie')) {
        get_template_part('template-parts/categorie', 'galerie');
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