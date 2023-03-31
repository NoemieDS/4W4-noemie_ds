<?php

/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="site__main no-aside">
<!--   <h5 class="modele_php">search.php</h5>  -->
  <h2 class="search_titre">Résultats de la recherche</h2>
  <article class="search_resultat>
          <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
       $lien = get_permalink(); 
        $lire = "<a href='" . $lien . "'> [...]</a>"; ?>
        <div class="search_resultat_titre">
        <h4 ><a href="<?php the_permalink(); ?>"> <?= get_the_title(); ?></a></h4></div>
        <div class="search_resultat_extrait">   <?= wp_trim_words(get_the_excerpt(), 50, $lire) ?></div>
          <hr>
          <?php
        endwhile;
      endif;
      ?>
   </article>
</main>
<?php get_footer(); ?>