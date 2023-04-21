<?php

function ajouter_styles()
{

    wp_enqueue_style(
        'style-principale',  // identificateur du link css
        get_template_directory_uri() . '/style.css',  // enroit où se trouve le fichier style.css
        array(), // les fichiers css qui dépendent de style.css
        filemtime(get_template_directory() . '/style.css')  // version de notre style.css
    );

    /* Polices de Google */
wp_enqueue_style('style-goolefont', 'https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200', false);

}
add_action('wp_enqueue_scripts', 'ajouter_styles' );



/* ----------------------------------- Enregistrement des menus */
function enregistrement_nav_menu()
{
    register_nav_menus(array(
        'principal' => 'Menu principal',
        'footer'  => 'Menu pied de page',
        'aside'  => 'Menu secondaire'
    ));
}
add_action('after_setup_theme', 'enregistrement_nav_menu', 0);

/*----------------------------------------- add_theme_support() */
add_theme_support('title-tag');
add_theme_support(
    'custom-logo',
    array(
        'height' => 150,
        'width'  => 150,
    )
);
add_theme_support('post-thumbnails');
//add_theme_support('custom-background', array());
add_theme_support('custom-background');

/*-------------------------------------------------Modifications des choix du menu cours */
function personnaliser_menu_item_titre($title, $item, $args)
{
    // Remplacer 'nom_de_votre_menu' par l'identifiant de votre menu
    if ($args->menu == 'cours') {

        // Modifier la longueur du titre en fonction des besoins
        $sigle = substr($title, 0, 7);
        $sigleBureau = substr($title, 4, 3);
        $title = substr($title, 7);
        $title = wp_trim_words($title, 3, ' ... ');
        $titleFinal = explode( " ",  $title );
        array_splice( $titleFinal, -1 );
          
        $title = "<code class='sigle-telephone'>" . $sigle . "</code>" . "<code class='sigle-bureau'>" . $sigleBureau . 
        "</code>" . "<p class='cours-titres'>" . 
         implode( " ",  $titleFinal) . "<p>";
    }
    
    /*-------------------------------------------------Modifications des choix du menu 4w4 */
    if ($args->menu == '4w4') {
        // Modifier la longueur du titre en fonction de vos besoins

        if (substr($title, 0, 1) == '0') {
            $title = substr($title, 1);
        }
    }

    return $title;
}
add_filter('nav_menu_item_title', 'personnaliser_menu_item_titre', 10, 3);


/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function cidweb_modifie_requete_principal($query) //s'exécute à chaque page
{
    if (
        $query->is_home()
        && $query->is_main_query() //ce n'est pas une requête secondaire
        && !is_admin() // c'est pas le tableau de bord (car il y a là aussi une requête principale)
    ) {
        $query->set('category_name', '4w4'); //On affiche 4W4 sur la page principale
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}
//add_action est un écouteur (JS : add event listener)
//pre_get_posts est un hook c'est comme un event en JS, donne une chance de modifier la requête 
//principale avant qu'elle soit exécuté
add_action('pre_get_posts', 'cidweb_modifie_requete_principal'); 

// Enregistrer le sidebar
function enregistrer_sidebar() {
    register_sidebar( array(
        'name' => __( 'Footer 1', '4w4-noemie_ds' ),
        'id' => 'footer_1',
        'description' => __( 'Une zone pour afficher des widgets dans le footer.', '4w4-noemie_ds' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer 2', '4w4-noemie_ds' ),
        'id' => 'footer_2',
        'description' => __( 'Une zone pour afficher des widgets dans le footer.', '4w4-noemie_ds' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer 3', '4w4-noemie_ds' ),
        'id' => 'footer_3',
        'description' => __( 'Une zone pour afficher des widgets dans le footer.', '4w4-noemie_ds' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'enregistrer_sidebar' );