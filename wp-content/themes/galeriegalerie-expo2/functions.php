<?php
/*
 * Functions for the site
 */
require_once( get_template_directory() . '/libs/custom-ajax-auth.php' );
show_admin_bar(false);
add_action( 'after_theme_setup', 'setup' );
function setup() {
	
}

add_action( 'init', 'init' );
function init() {
	register_nav_menus( array( 'navigation' => 'Navigation' ) );
	add_theme_support( 'post-thumbnails' );

	register_sidebar( array(
		'name' => __( 'Sidebar', THEME_NAME ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	/* Exemple création post type */

	/*$labelsEvent = array(
        'name' => _x('Événements', 'post type general name', 'Pauvreté'),
        'singular_name' => _x('Événement', 'post type singular name', 'Pauvreté'),
        'add_new' => _x('Ajouter un événement', 'evenements'),
        'add_new_item' => __('Ajouter un événement'),
        'edit_item' => __('Modifier l\'événement'),
        'new_item' => __('Nouvel événement'),
        'all_items' => __('Tous les événement'),
        'view_item' => __('Voir l\'événement'),
        'search_items' => __('Chercher un événement'),
        'not_found' =>  __('Aucun événement trouvé'),
        'not_found_in_trash' => __('Rien de trouvé dans la corbeille'),
        'parent_item_colon' => '',
        'menu_name' => 'Événements'
    );
    
    $argEvent = array(
        'labels' => $labelsEvent,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => _x('evenements', 'URL slug', 'Pauvreté')),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => 20,
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => array('title', 'thumbnail', 'editor', 'revisions', 'page-attributes')
    );

    register_post_type('evenements', $argEvent);

    register_taxonomy(
        'categorie-evenement',
        'evenements',
        array(
            'label' => __( 'Catégories' ),
            'hierarchical' => true,
        )
    ); */

}


