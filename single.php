<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="site__single">
<h5 class="modele_php">single.php</h5>
<?php 
if(have_posts()): 
  while (have_posts()) : the_post();
the_title('<h2>', '</h2>');
the_content(); ?>
<hr>
<?php
endwhile;
endif;
?>
</main>
<?php get_footer(); ?>
