<?php

/**
 * Template part pour afficher le titre du résultat de recherche
 */
$titre = get_the_title();
$lien = get_permalink();

if (substr($titre, 0, 1) == '0') {
  $titre = substr($titre, 1);
}
$lire = "<a href='" . $lien . "'> [...]</a>";
?>

<article class="search_resultat">
  <div class="search_resultat_titre">
    <h3><a href="<?php the_permalink(); ?>"> <?= $titre ?></a></h3>
  </div>
  <div class="search_resultat_extrait"> <?= wp_trim_words(get_the_excerpt(), 50, $lire) ?></div>
</article>