<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
<!-- <h5 class="modele_php">search.php</h5> -->
<h2>Résultats de la recherche</h2>
<section class="section_contenu_principal">
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

</section>
</main>
<?php get_footer(); ?>
