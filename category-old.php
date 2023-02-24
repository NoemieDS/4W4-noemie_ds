<?php

/**
 * Modèle category par défaut
 * 
 */
?>
<?php get_header(); ?>
<main>
  <h2>Les articles de category.php</h2>
  <section class="blocflex">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
        <article class="front__articles">
          <h3>
            <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?> </a>
          </h3>
          <?php //the_content();  //Affiche le contenu complet de l'article 
          ?>
          <?php //the_excerpt(); //Affiche un résumé de l'article 
          ?>
          <p><?php if (is_category('cours'))  echo 'cours'; ?></p>
          <p> <?= wp_trim_words(get_the_excerpt(), 10, "<span> &#187;</span>") ?> </p>
        </article>
    <?php
      endwhile;
    endif;
    ?>
  </section>
</main>

<?php get_footer(); ?>