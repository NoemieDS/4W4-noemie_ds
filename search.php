<?php

/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="site__main no-aside">
  <!--   <h5 class="modele_php">search.php</h5>  -->
  <h2 class="search_titre">Résultats de la recherche</h2>
  <?php

 if (have_posts()) :
  while (have_posts()) : the_post(); 

  get_template_part('template-parts/search-4w4'); ?>

      <hr class="search_diviseur">
  <?php
    endwhile;
  endif;
  ?>

</main>
<?php get_footer(); ?>
