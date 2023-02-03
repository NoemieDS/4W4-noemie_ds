<?php
function ajouter_styles() {
wp_enqueue_style('style-principal', //identificateur du link css
                  get_template_directory_uri() . '/style.css', //chemin du fichier style.css
                  array(), // les dépendences, s'il y a, - les fichiers css qui dépendent de style.css
                  filemtime(get_template_directory() . '/style.css'), //version du fichier style.css
                  );
                }
add_action( 'wp_enqueue_scripts', 'ajouter_styles');  //le "add event listener" de wordpress

/* --------------------------------------------------Enregistrement des menus */
         
function enregistrement_nav_menu(){
        register_nav_menus( array(
          'principal' => 'Menu principal',
          'footer'  => 'Menu pied de page',
        ) );
    }
add_action( 'after_setup_theme', 'enregistrement_nav_menu', 0 );
 
