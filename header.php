<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,400;1,400&family=Source+Sans+3:ital,wght@0,400;1,400&family=Source+Serif+Pro:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <?php wp_head(); ?>
</head>

<?php
$nouvelle_classe = "";
if (is_front_page()) {
  $nouvelle_classe = 'no-aside';
}
?>

<body>
<div class="site <?= $nouvelle_classe ?>">
  <header class="site__header">
    <section class="site__header__logo">
      <?php the_custom_logo() ?>
    </section>
    <section class="site__header__titre">
      <h1><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a></h1>
      <h2><?= bloginfo('description') ?></h2>
    </section>

    <div class="site__header_nav_recherche">
      <input type="checkbox" id="chkMenu" value="">
      <label class="burger" for="chkMenu"><span class="material-symbols-outlined">
          menu
        </span></label>
      <?php wp_nav_menu(array(
        "menu" => "entete",
        "container" => "nav"
      )) ?>
      <section class="site__header__recherche">
        <?php
        get_search_form();
        ?>
      </section>
    </div>
  </header>
  <?php
  if (!is_front_page()) {
    get_template_part("template-parts/aside");
  }
  ?>
 