<?php
/**
 * Template part pour afficher une blocflex article catégorie accueil
 */
   
  ?>

<article class="bloc__article">
  <?php  if(has_post_thumbnail()) {
    the_post_thumbnail('thumbnail');
 //  echo get_the_ID();
  } 
else {

    echo get_the_post_thumbnail(89,'thumbnail' );
  }
?>
  <h3><a href="<?php the_permalink(); ?>"> <?= $titre ?></a></h3>
    <?php $lien = get_permalink(); ?>
    <?php $lire = "<span><a href='" . $lien . "'>... &#187;</a></span>" ?>
   <p> <?= wp_trim_words(get_the_excerpt(), 20, $lire) ?> </p>
   <p> <?= the_category(', ');  ?> </p>
</article>