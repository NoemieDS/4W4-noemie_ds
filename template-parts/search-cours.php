<?php

/**
 * Template part pour afficher le titre du résultat de recherche
 */
$titre = get_the_title();
$sigle = substr($titre, 0, 7); 
$titre_long = substr($titre, 7, -6); 
$duree = substr($titre, strpos($titre, '(')); 

$lien = get_permalink();
$lire = "<a href='" . $lien . "'> [...]</a>";
?>

<article class="search_resultat">
  <div class="search_resultat_titre">
    <h4><a href="<?php the_permalink(); ?>"> <?= $titre_long; ?></a></h4>
    <h3>Sigle: <?= $sigle ?></h3>
    <?php $lien = get_permalink(); ?>
    <h6>Durée: <?= $duree; ?> </h6>
    <p>Enseignant: <?php the_field('enseignant'); ?>
      <br />Domaine: <?php the_field('domaine'); ?></br>
  </div>
  <div class="search_resultat_extrait"> <?= wp_trim_words(get_the_excerpt(), 50, $lire) ?></div>
</article>