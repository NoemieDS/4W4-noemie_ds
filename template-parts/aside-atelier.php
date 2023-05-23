<?php
/**
 * Template part pour afficher le aside des ateliers
 */
 ?>

<aside class="site__aside">
    <?php 
    $ma_categorie = "4w4";
    if (in_category('cours')) {
      $ma_categorie = "cours";
    }
if (in_category('galerie')) {
      $ma_categorie = "galerie";
    } 
  
   wp_nav_menu(array(
        "menu" => $ma_categorie,
        "container" => "nav"  
    )); ?>
</aside>