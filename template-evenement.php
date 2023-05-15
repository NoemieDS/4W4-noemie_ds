<?php
/** 
* template name: Evenement
*/
 get_header(); ?>
<main class="site__main no_aside no-aside-logo">
<section class="section_evenement">
<article class="section_evenement_contenu">
<h1 class="evenement_titre"><?= get_the_title(); ?></h1>
<?php
if ( have_posts() ) : the_post(); ?>
  <?php  if(has_post_thumbnail()) {
    the_post_thumbnail('medium');
 // echo get_the_ID();
  } 
  else {

    echo get_the_post_thumbnail(259,'thumbnail' );
  }
 ?>

<?php the_content();?>
<p class="evenement-adresse">L'adresse de l'evénement : <?php the_field('adresse'); ?></p>
<p class="evenement-date">La date et l'heure de l'événement : <?php the_field('date_et_heure'); ?></p> 
<iframe class="google-maps" width="400" height="300" style="border:0;"  allowfullscreen="" loading="lazy" src="<?php the_field('google_map'); ?>"></iframe>  
<?php endif;?>
</article>
</section>
</main>
<?php
get_footer();

  

