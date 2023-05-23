<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <?php wp_head(); ?>
</head>

<?php
$nouvelle_classe = "";
if (is_front_page() || is_search() || is_page()) {
  $nouvelle_classe = 'no-aside';
}
if (is_page_template('template-atelier.php')) {
  $nouvelle_classe = '';
}
?>

<body class="custom-background">
  <div class="site <?= $nouvelle_classe ?>">
    <header class="site__header">

      <?php
      if (!is_front_page()) {
      ?>
        <div class="site_titre_ordi">

          <h1><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a></h1>
          <h2><?= bloginfo('description') ?></h2>
        </div>
      <?php   }
      ?>

      <input type="checkbox" id="chkMenu" value="">
      <section class="site__header__barre">
        <?php the_custom_logo() ?>
        <label class="burger" for="chkMenu">
          <span class="material-symbols-outlined">menu</span>
        </label>
      </section>

      <section class="site__menu">

        <div class="site__header__recherche">
          <?php get_search_form(); ?>
        </div>

        <div class="site__header__titre">
          <?php the_custom_logo() ?>
          <h1><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a></h1>
          <h2><?= bloginfo('description') ?></h2>
        </div>

        <?php wp_nav_menu(array(
          "menu" => "entete",
          "container" => "nav"
        )) ?>
      </section>

    </header>
    <?php
    if (!is_front_page() && !is_search() && !is_page()) {
      get_template_part("template-parts/aside");
    }

    if (is_page() && is_page_template('atelier')) {
      get_template_part("template-parts/aside-atelier");
    }

    ?>
