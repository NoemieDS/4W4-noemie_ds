<?php
/**
 * Template part pour afficher aside selon les catégories
 */
 ?>

<aside class="site__aside aside_atelier">

    <?php 
  
   wp_nav_menu(array(
        "menu" => "atelier",
        "container" => "nav"  
    )); ?>
</aside>