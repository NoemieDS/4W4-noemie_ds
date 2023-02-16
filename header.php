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
  <?php wp_head(); ?>
 </head>
<body>
  <header class="site__header">
    <section class="site__header__logo-menu">
    <?php the_custom_logo() ?>
    <?php wp_nav_menu(array(
      "menu" => "entete", 
      "container" => "nav"
    )) ?>
    </section>
    <h1><a href="<?= bloginfo('url')?>"><?= bloginfo('name') ?></a></h1>
    <h2><?= bloginfo('description')?></h2>
</header>
  
