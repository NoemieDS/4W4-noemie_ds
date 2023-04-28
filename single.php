<?php
/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="site__main">
<!-- <h5 class="modele_php">single.php</h5> -->
<section class="section_fiche">
<article class="section_fiche_contenu">
<?php
    if (have_posts()): 
        while (have_posts()) : the_post();
        the_title('<h1 class="single_titre">','</h1>');
        the_post_thumbnail('large');
        the_content(); 
        endwhile;
    endif;
?>
</article>
</section>
</main>

<?php get_footer(); ?>