  <?php
  /**
 * Template part pour afficher une blocflex article cours TIM
 */
    $titre = get_the_title();
    $sigle = substr($titre, 0, 7); //"582-1W1 - Mise en page web", garde de 0 au 7e caractère
    $titre_long = substr($titre, 7, -6); //part du 7e et ramasse pas les 6 derniers
   // $duree = substr($titre, -6)
    $duree = substr($titre, strpos($titre,'(')); //plus optimal
  ?>



<article class="bloc__article">
<?php  if(has_post_thumbnail()) {
    the_post_thumbnail('thumbnail');
 // echo get_the_ID();
  } 
else {

    echo get_the_post_thumbnail(141,'thumbnail' );
  }
?>
  <h3><a href="<?php the_permalink(); ?>"> <?= $sigle ?></a></h3>
  <h4> <?= $titre_long; ?> </h4>
    <?php $lien = get_permalink(); ?>
    <?php $lire = "<span><a href='" . $lien . "'>... &#187;</a></span>" ?>
   <p> <?= wp_trim_words(get_the_excerpt(), 20, $lire) ?> </p>
   <h4> <?= $duree; ?> </h4>
   <p>Professeur : <?php the_field('enseignant'); ?>
   <br/>Catégorie : <?php the_field('domaine'); ?>
   <br/> <?= the_category(', ');  ?> </p>
</article>