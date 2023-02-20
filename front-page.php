<?php

/**
 * Modèle par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
  <h2 class="front_titre">Les derniers articles de front-page.php</h2>
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
          <p><?php if(is_category('cours'))  echo 'cours';?></p>
          <p> <?= wp_trim_words(get_the_excerpt(), 20, "<span> &#187;</span>") ?> </p>
        </article>
    <?php
      endwhile;
    endif;
    ?>
  </section>
</main>
<?php get_footer(); ?>