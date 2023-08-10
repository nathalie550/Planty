<?php


// La fonction que vous souhaitez exécuter après la configuration du thème
function theme_register_menus()
{
    // Ici, vous pourriez enregistrer des emplacements de menu, ajouter des supports, etc.
    register_nav_menus(
        array(
            'theme_location' => 'Menu principal',
            'header' => 'Entête de mon menu',
        )
    );


    add_theme_support('post-thumbnails'); // Exemple d'ajout de support pour les images à la une
    add_theme_support('custom-logo');
    add_theme_support('menus');
}

// Attachez la fonction à l'action after_setup_theme
add_action('after_setup_theme', 'theme_register_menus');




// Action qui permet de charger des scripts dans notre thème


add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Chargement du style.css du thème parent Twenty Twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}


// Action qui permet d afficher un menu Admin si on est connecté
add_filter('wp_nav_menu_items', 'add_admin_link', 11, 3);


function add_admin_link($items, $args)
{

    if (is_user_logged_in() && $args->theme_location === 'Entête de mon menu') {

        $items .= '<li><a href="http://localhost:8888/Planty/admi/' . get_admin_url() . '">Admin</a></li>';
    }

    return $items;
}
