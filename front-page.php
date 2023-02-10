<?php

/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main class="site__front-page">
  <h3>Les derniers articles de front-page.php</h3>
    <article class="front-page-elt">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <h1>
          <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?> </a>
        </h1>
        <?php //the_content();  //Affiche le contenu complet de l'article 
        ?>
        <?php //the_excerpt(); //Affiche un résumé de l'article 
        ?>
        <?= wp_trim_words(get_the_excerpt(), 30, " &#10148;") ?>
        <hr>
    <?php
      endwhile;
    endif;
    ?>
  </article>
</main>
<?php get_footer(); ?>