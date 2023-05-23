<?php
/**
 * Template part pour afficher aside selon les catégories
 */
 ?>

<aside class="site__aside aside_atelier ">
<h2 class="">Nos ateliers en 2023</h2>
    <?php 
  
   wp_nav_menu(array(
        "menu" => "aside-atelier",
        "container" => "nav"  
    )); ?>


</aside>