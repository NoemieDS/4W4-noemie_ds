<?php
/** 
* template name: Atelier
*/
 get_header(); ?>
<main class="site__main no-aside-logo">
<section class="section_atelier">
<article class="section_atelier_contenu">
<h1 class="atelier_titre"><?= get_the_title(); ?></h1>
<?php
if ( have_posts() ) : the_post(); ?>
  <?php  if(has_post_thumbnail()) {
    the_post_thumbnail('full');
 // echo get_the_ID();
  } 
  else {

    echo get_the_post_thumbnail(667,'thumbnail' );
  }
 ?>

<?php the_content();?>
<table class="atelier-table">
  <tr><td class="atelier-date">Date</td> <td> <?php the_field('date'); ?></td> </tr>
  <tr><td class="atelier-date">Heure</td> <td> <?php the_field('heure'); ?></td> </tr>
  <tr><td class="atelier-date">Durée</td> <td> <?php the_field('duree'); ?> Heures</td></tr>
  <tr><td class="atelier-date">Local</td> <td> <?php the_field('local'); ?></td></tr>
  <tr><td class="atelier-date">Formateur</td> <td> <?php the_field('formateur'); ?></td></tr>
<?php endif;?>
</table>
</article>
</section>
</main>
<?php
get_footer();

  

