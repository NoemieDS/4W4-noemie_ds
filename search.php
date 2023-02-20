<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
<h5>search.php</h5>
<h2>Résultats de la recherche</h2>
<?php 
if(have_posts()): 
  while (have_posts()) : the_post();
the_title('<h4>', '</h4>');?>

<?= wp_trim_words(get_the_excerpt(), 50, " [...]") ?>

<hr>
<?php
endwhile;
endif;
?>
</main>
<?php get_footer(); ?>
