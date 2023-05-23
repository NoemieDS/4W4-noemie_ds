<?php
/** 
* template name: Atelier
*/
 get_header(); ?>
<main class="site__main site__aside">
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
<table>
  <tr>
<td class="atelier-date">Date <?php the_field('date'); ?></td> 
<td class="atelier-date">Heure <?php the_field('heure'); ?></td> 
<td class="atelier-date">Durée <?php the_field('duree'); ?> Heures</td>
<td class="atelier-date">Local <?php the_field('local'); ?></td>
<td class="atelier-date">Formateur <?php the_field('formateur'); ?></td>
<?php endif;?>
</tr>
</table>
</article>
</section>
</main>
<?php
get_footer();

  

