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
<?php wp_nav_menu(array(
  'menu' => 'evenement',
  'container' => 'nav'
)); ?>
</section>
<section class="sidebar-galerie">
      <?php dynamic_sidebar('front_2'); ?>
    </section>
<section>
<section class="sidebar-galerie">
      <?php dynamic_sidebar('front_3'); ?>
    </section>
<section>
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

  <section class="blocflex">
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