<?php
/* 
* Template part pour afficher la galerie dans la page d'accueil
*
* COMMENT NE PAS AFFICHER LE TITRE SUR LA PAGE D'ACCUEIL ??
*/
$titre = get_the_title();
$lien = get_permalink(); 
$accueil = get_home_url();
?>



<section class="blocflex__galerie"> 

<?php 

if(!$accueil)
 {?>
   <h3><a href="<?php the_permalink(); ?>"> <?= $titre ?></a></h3>
   <?php
}
?>

   <!--  <?php $lire = "<span><a href='" . $lien . "'>... &#187;</a></span>" ?> -->
  <?php
   the_content();
?>
</section>