<?php
/* 
* Template part pour afficher la galerie dans la page d'accueil
*
*/
$titre = get_the_title();
?>

<?php 
if(!is_front_page()) { ?>
<section class="blocflex__galerie"> 
<?php } 
else { ?>
<section class="blocflex__galerie"> 
<h2><a href="<?php the_permalink(); ?>"> <?= $titre ?></a></h2> 
<h3><a href="<?php the_permalink(); ?>"> <?= $titre ?></a></h3> 

<?php }
 ?>
<?php 
if(!is_front_page()) { ?>
<?php }
 the_content();
 ?>
 <h3><a href="<?php the_permalink(); ?>"> <?= $titre ?></a></h3> 
 <p><?php the_field('description'); ?>
  <br/>Par <?php the_field('auteur'); ?>,
   <?php the_field('date'); ?></br>
   <p><?= the_category(', ');?> </p>
</section>