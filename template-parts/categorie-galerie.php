<?php
/* 
* Template part pour afficher la galerie dans la page d'accueil
*
*/
$titre = get_the_title();
?>

<?php 
if(!is_front_page()) { ?>
<section class="blocflex__galerie blocflex__galerie_categorie"> 
<?php } 
else { ?>
<section class="blocflex__galerie"> 
<?php }
 ?>


<?php 

if(!is_front_page()) { ?>
<h3><a href="<?php the_permalink(); ?>"> <?= $titre ?></a></h3> 
<?php }
 the_content();
 ?>
 <p><?php the_field('description'); ?>
  <br/>Par <?php the_field('auteur'); ?>,
   <?php the_field('date'); ?></br>

</section>