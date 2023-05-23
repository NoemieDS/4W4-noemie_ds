<?php

/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="site__main no-aside no-aside-front">

  <section class="accueil_titre_section">
  <div class="accueil-titre">
      <span>4</span>
      <span>W</span>
      <span>4</span>
      <span>&nbsp;</span>
      <span>T</span>
      <span>I</span>
      <span>M</span>
      <span>!</span>
    </div>
    <h2>Bienvenue sur le site Mon premier thème&nbsp;Wordpress</h2>
  </section>

  <section class="blocflex_evenement">
    <h2 class="blocflex-titre">Nos prochains ateliers</h2>
    <?php 
    wp_nav_menu(array(
       "menu" => "atelier",
       "container" => "nav"  
   )); ?>
</section>

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

  <section class="blocflex articles-accueil">
  <h2 class="blocflex-titre">Sélections de la rédaction  </h2>
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