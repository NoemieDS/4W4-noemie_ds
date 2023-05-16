<?php

/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="site__main no-aside no-aside-front">
<section class="sidebar-galerie">
      <?php dynamic_sidebar('front_1'); ?>
    </section>
  <section class="blocflex_evenement">
    <h2 class="blocflex-titre">Nos prochains évènements</h2>
<?php wp_nav_menu(array(
  'menu' => 'evenement',
  'container' => 'nav'
)); ?>
</section>
<section class="sidebar-galerie">
      <?php dynamic_sidebar('front_2'); ?>
    </section>
<section>

<section>
<h2 class="blocflex-titre">Vers nos archives</h2>
<?php
wp_nav_menu(array(
  'menu' => 'bloc-archive',
  'container' => 'nav'
));
 ?>
  </section>

  <?php
/*
 if (have_posts()) :
    while (have_posts()) : the_post();
    if (in_category('galerie')) {
        $ma_categorie = "galerie";
        get_template_part('template-parts/categorie', $ma_categorie);
      }
    endwhile;
  endif; */
  ?>

  <section class="blocflex articles-accueil">
  <h2 class="blocflex-titre">Articles les<br> plus lus</h2>
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        if (in_category('galerie')) {
          $la_categorie ='galerie';
        } if (in_category('cours')) {
          $la_categorie ='cours';
        }
        else {
          $la_categorie ='4w4';
        } 
        get_template_part('template-parts/categorie', $la_categorie); 
      endwhile;
    endif;
    ?>
  </section>
</main>
<?php get_footer(); ?>