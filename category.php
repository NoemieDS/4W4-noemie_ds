<?php

/**
 * Modèle category par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
  <h3>Les articles de category.php</h3>
  <section class="blocflex">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <article class="front_article">
          <h3>
            <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?> </a>
          </h3>
          <?php //the_content();  //Affiche le contenu complet de l'article 
          ?>
          <?php //the_excerpt(); //Affiche un résumé de l'article 
          ?>
          <p> <?= wp_trim_words(get_the_excerpt(), 20, "<span> &#10148;</span>") ?> </p>
        </article>
    <?php
      endwhile;
    endif;
    ?>
  </section>
</main>
<?php get_footer(); ?>