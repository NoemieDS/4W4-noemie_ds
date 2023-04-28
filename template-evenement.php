<?php
/** 
* template name: Evenement
*/
 get_header(); ?>
<main class="site__main">
<h1><?= get_the_title(); ?></h1>
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
<p>L'adresse de l'evénement : <?php the_field('adresse'); ?></p>
<p>La date et l'heure de l'événement : <?php the_field('date_et_heure'); ?></p> 
<iframe src="<?php the_field('google_map'); ?>"></iframe>  
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();

  

