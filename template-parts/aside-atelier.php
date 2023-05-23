<?php
/**
 * Template part pour afficher aside selon les catégories
 */
 ?>

<aside class="site__aside aside_atelier">

    <?php 
  
   wp_nav_menu(array(
        "menu" => "aside-atelier",
        "container" => "nav"  
    )); ?>
</aside>