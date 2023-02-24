<?php

/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
  <!-- <h5 class="modele_php">search.php</h5> -->
  <h2>Résultats de la recherche</h2>
  <section class="section_fiche">
    <article class="section_fiche_contenu">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
       $lien = get_permalink(); 
        $lire = "<a href='" . $lien . "'> [...]</a>"; ?>
        <h4><a href="<?php the_permalink(); ?>"> <?= get_the_title(); ?></a></h4>
          <?= wp_trim_words(get_the_excerpt(), 50, $lire) ?>
          <hr>
          <?php
        endwhile;
      endif;
      ?>
    </article>
  </section>
</main>
<?php get_footer(); ?>