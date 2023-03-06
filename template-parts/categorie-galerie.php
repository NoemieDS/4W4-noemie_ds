<?php
/* 
* Template part pour afficher la galerie dans la page d'accueil
*
* COMMENT NE PAS AFFICHER LE TITRE SUR LA PAGE D'ACCUEIL ??
*/
$titre = get_the_title();
?>

<section class="blocflex__galerie <?php echo (!is_front_page()?'bloc__article':'');?>"> 

<?php 

if(!is_front_page()) { ?>
<h3><a href="<?php the_permalink(); ?>"> <?= $titre ?></a></h3> 
<?php }
 the_content();
?>

</section>