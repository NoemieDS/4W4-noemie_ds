<?php

/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
  <h2 class="front__titre">Les derniers articles de front-page.php</h2>
  <section class="blocflex">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <article class="front__articles">

          <h3>
            <a href="<?php echo get_permalink(); ?>">
              <?php echo get_the_title(); ?>
              <?php $lien = get_permalink(); ?>
            </a>
          </h3>

          <?php //the_content();  //Affiche le contenu complet de l'article 
          ?>
          <?php //the_excerpt(); //Affiche un résumé de l'article 
          ?>

          <p><?php if (is_category('cours'))  echo 'cours'; ?></p>
          <?php //the_excerpt(); //Affiche un résumé de l'article 
          $lire = "<span><a href='" . $lien . "'>&#187;</a></span>"
          ?>
          <p> <?= wp_trim_words(get_the_excerpt(), 15, $lire) ?> </p>
        </article>

    <?php
      endwhile;
    endif;
    ?>
  </section>
</main>
<?php get_footer(); ?>