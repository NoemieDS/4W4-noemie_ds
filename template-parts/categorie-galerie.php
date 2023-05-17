<?php
/* 
* Template part pour afficher la galerie dans la page d'accueil
*
*/
$titre = get_the_title();
?>



<section class="blocflex__galerie">
   <?php if (has_post_thumbnail()) {
      the_post_thumbnail('full');
      // echo get_the_ID();
   } else {

      echo get_the_post_thumbnail(141, 'thumbnail');
   }
   ?>
   <?php
   the_content();
   ?>
      <h3 class="acf"><a href="<?php the_permalink(); ?>"> <?= $titre ?></a></h3>
   <div class="bloc_info_texte">
      <h5 class="acf"><?php the_field('description'); ?></h5>
      <p class="acf">Par: <?php the_field('auteur'); ?>,
         &nbsp;<?php the_field('date'); ?>
      <p>

         <?php
         if (is_front_page()) { ?>
      <p><?= the_category(', '); ?> </p>
   <?php } ?>
   </div>
</section>