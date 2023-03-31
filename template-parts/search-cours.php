<?php

/**
 * Template part pour afficher le titre du résultat de recherche
 */
$titre = get_the_title();
$sigle = substr($titre, 0, 7); //"582-1W1 - Mise en page web", garde de 0 au 7e caractère
$titre_long = substr($titre, 7, -6); //part du 7e et ramasse pas les 6 derniers
// $duree = substr($titre, -6)
$duree = substr($titre, strpos($titre, '(')); //plus optimal

$lien = get_permalink();
$lire = "<a href='" . $lien . "'> [...]</a>";
?>

<article class="search_resultat">
  <div class="search_resultat_titre">
    <h3><a href="<?php the_permalink(); ?>"> <?= $sigle ?></a></h3>
    <h4> <?= $titre_long; ?> </h4>
    <?php $lien = get_permalink(); ?>
    <?php $lire = "<span><a href='" . $lien . "'>... &#187;</a></span>" ?>
    <p> <?= wp_trim_words(get_the_excerpt(), 20, $lire) ?> </p>
    <h6> <?= $duree; ?> </h6>
    <p>Enseignant: <?php the_field('enseignant'); ?>
    <br />Domaine: <?php the_field('domaine'); ?></br>
  </div>
  <div class="search_resultat_extrait"> <?= wp_trim_words(get_the_excerpt(), 50, $lire) ?></div>
</article>