<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
  <div>
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
</div>
</main>
<?php get_footer(); ?>