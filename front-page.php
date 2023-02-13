<?php

/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
  <h3>Les derniers articles de front-page.php</h3>
  <section class="blocflex">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <article>
          <h2>
            <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?> </a>
          </h2>
          <?php //the_content();  //Affiche le contenu complet de l'article 
          ?>
          <?php //the_excerpt(); //Affiche un résumé de l'article 
          ?>
          <p> <?= wp_trim_words(get_the_excerpt(), 30, " &#10148;") ?> </p>
        </article>
    <?php
      endwhile;
    endif;
    ?>
  </section>
</main>
<?php get_footer(); ?>