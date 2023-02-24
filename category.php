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
      $category = get_queried_object();
      $args = array(
        'category_name' => $category->slug,
        'orderby' => 'title',
        'order' => 'ASC'
     );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) :
         while ( $query->have_posts() ) : $query->the_post(); ?>
            <article class="front__articles">
               <h3><a href="<?php the_permalink(); ?>"> <?= get_the_title(); ?></a></h3>
               <?php $lien = get_permalink(); ?>
              <?php $lire = "<span><a href='" . $lien . "'>&#187;</a></span>" ?>
               <p> <?= wp_trim_words(get_the_excerpt(), 15, $lire) ?> </p>
            </article>
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
   </section>
</main>

<?php get_footer(); ?>