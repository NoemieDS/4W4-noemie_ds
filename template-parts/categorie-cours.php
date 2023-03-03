  <?php
  /**
 * Template part pour afficher une blocflex article cours TIM
 */
    $titre = get_the_title();
    $sigle = substr($titre, 0, 7); //582-1W1 - Mise en page web, garde de 0 au 7e caractère
    $titre_long = substr($titre, 7, -5); //part du 7e et ramasse pas les 7 dernier
    $duree = substr($titre, -5)
    //strpos($titre, '()') permet de trouver la position dans une chaine
  ?>

<article class="bloc__article">
  <h3><a href="<?php the_permalink(); ?>"> <?= $sigle ?></a></h3>
  <h5> <?= $titre_long; ?> </h5>
    <?php $lien = get_permalink(); ?>
    <?php $lire = "<span><a href='" . $lien . "'>... &#187;</a></span>" ?>
   <p> <?= wp_trim_words(get_the_excerpt(), 15, $lire) ?> </p>
   <h6> <?= $duree; ?> </h6>
</article>