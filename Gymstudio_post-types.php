<?php 
/*
    Plugin Name: Gymstudio - Post Types
    Plugin URI:
    Description: Añade post Types al sitio Gymstudio
    Version: 1.0.0
    Author: Jesús Carrasquel
    Author URI:
    Text Domain:Gymstudio
*/

if(!defined('ABSPATH')) die();

// registrar Custom post types//

// Registrar Custom Post Type
function gymstudio_clases_post_type() {

	$labels = array(
		'name'                  => _x( 'Clases', 'Post Type General Name', 'Gymstudio' ),
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'Gymstudio' ),
		'menu_name'             => __( 'Clases', 'Gymstudio' ),
		'name_admin_bar'        => __( 'Clase', 'Gymstudio' ),
		'archives'              => __( 'Archivo', 'Gymstudio' ),
		'attributes'            => __( 'Atributos', 'Gymstudio' ),
		'parent_item_colon'     => __( 'Clase Padre', 'Gymstudio' ),
		'all_items'             => __( 'Todas Las Clases', 'Gymstudio' ),
		'add_new_item'          => __( 'Agregar Clase', 'Gymstudio' ),
		'add_new'               => __( 'Agregar Clase', 'Gymstudio' ),
		'new_item'              => __( 'Nueva Clase', 'Gymstudio' ),
		'edit_item'             => __( 'Editar Clase', 'Gymstudio' ),
		'update_item'           => __( 'Actualizar Clase', 'Gymstudio' ),
		'view_item'             => __( 'Ver Clase', 'Gymstudio' ),
		'view_items'            => __( 'Ver Clases', 'Gymstudio' ),
		'search_items'          => __( 'Buscar Clase', 'Gymstudio' ),
		'not_found'             => __( 'No Encontrado', 'Gymstudio' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'Gymstudio' ),
		'featured_image'        => __( 'Imagen Destacada', 'Gymstudio' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'Gymstudio' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'Gymstudio' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'Gymstudio' ),
		'insert_into_item'      => __( 'Insertar en Clase', 'Gymstudio' ),
		'uploaded_to_this_item' => __( 'Agregado en Clase', 'Gymstudio' ),
		'items_list'            => __( 'Lista de Clases', 'Gymstudio' ),
		'items_list_navigation' => __( 'Navegación de Clases', 'Gymstudio' ),
		'filter_items_list'     => __( 'Filtrar Clases', 'Gymstudio' ),
	);
	$args = array(
		'label'                 => __( 'Clase', 'Gymstudio' ),
		'description'           => __( 'Clases para el Sitio Web', 'Gymstudio' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Gymstudio_clases', $args );

}
add_action( 'init', 'Gymstudio_clases_post_type', 0 );


// Register Custom Post Type
function Gymstudio_instructores() {

	$labels = array(
		'name'                  => _x( 'Instructores', 'Post Type General Name', 'Gymstudio' ),
		'singular_name'         => _x( 'Instructor', 'Post Type Singular Name', 'Gymstudio' ),
		'menu_name'             => __( 'Instructores', 'Gymstudio' ),
		'name_admin_bar'        => __( 'Instructor', 'Gymstudio' ),
		'archives'              => __( 'Archivo', 'Gymstudio' ),
		'attributes'            => __( 'Atributos', 'Gymstudio' ),
		'parent_item_colon'     => __( 'Instructor Padre', 'Gymstudio' ),
		'all_items'             => __( 'Todos los Instructores', 'Gymstudio' ),
		'add_new_item'          => __( 'Agregar Instructor', 'Gymstudio' ),
		'add_new'               => __( 'Agregar Instructor', 'Gymstudio' ),
		'new_item'              => __( 'Nueva Instructor', 'Gymstudio' ),
		'edit_item'             => __( 'Editar Instructor', 'Gymstudio' ),
		'update_item'           => __( 'Actualizar Instructor', 'Gymstudio' ),
		'view_item'             => __( 'Ver Instructor', 'Gymstudio' ),
		'view_items'            => __( 'Ver Instructores', 'Gymstudio' ),
		'search_items'          => __( 'Buscar Instructor', 'Gymstudio' ),
		'not_found'             => __( 'No Encontrado', 'Gymstudio' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'Gymstudio' ),
		'featured_image'        => __( 'Imagen Destacada', 'Gymstudio' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'Gymstudio' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'Gymstudio' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'Gymstudio' ),
		'insert_into_item'      => __( 'Insertar en Instructor', 'Gymstudio' ),
		'uploaded_to_this_item' => __( 'Agregado en Instructor', 'Gymstudio' ),
		'items_list'            => __( 'Lista de Instructores', 'Gymstudio' ),
		'items_list_navigation' => __( 'Navegación de Instructores', 'Gymstudio' ),
		'filter_items_list'     => __( 'Filtrar Instructores', 'Gymstudio' ),
	);
	$args = array(
		'label'                 => __( 'Instructores', 'Gymstudio' ),
		'description'           => __( 'Instructores para el Sitio Web', 'Gymstudio' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'instructores', $args );

}
add_action( 'init', 'Gymstudio_instructores', 0 );


function Gymstudio_testimoniales() {

	$labels = array(
		'name'                  => _x( 'Testimoniales', 'Post Type General Name', 'Gymstudio' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'Gymstudio' ),
		'menu_name'             => __( 'Testimoniales', 'Gymstudio' ),
		'name_admin_bar'        => __( 'Testimonial', 'Gymstudio' ),
		'archives'              => __( 'Archivo', 'Gymstudio' ),
		'attributes'            => __( 'Atributos', 'Gymstudio' ),
		'parent_item_colon'     => __( 'Testimonial Padre', 'Gymstudio' ),
		'all_items'             => __( 'Todas Las Testimoniales', 'Gymstudio' ),
		'add_new_item'          => __( 'Agregar Testimonial', 'Gymstudio' ),
		'add_new'               => __( 'Agregar Testimonial', 'Gymstudio' ),
		'new_item'              => __( 'Nueva Testimonial', 'Gymstudio' ),
		'edit_item'             => __( 'Editar Testimonial', 'Gymstudio' ),
		'update_item'           => __( 'Actualizar Testimonial', 'Gymstudio' ),
		'view_item'             => __( 'Ver Testimonial', 'Gymstudio' ),
		'view_items'            => __( 'Ver Testimoniales', 'Gymstudio' ),
		'search_items'          => __( 'Buscar Testimonial', 'Gymstudio' ),
		'not_found'             => __( 'No Encontrado', 'Gymstudio' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'Gymstudio' ),
		'featured_image'        => __( 'Imagen Destacada', 'Gymstudio' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'Gymstudio' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'Gymstudio' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'Gymstudio' ),
		'insert_into_item'      => __( 'Insertar en Testimonial', 'Gymstudio' ),
		'uploaded_to_this_item' => __( 'Agregado en Testimonial', 'Gymstudio' ),
		'items_list'            => __( 'Lista de Testimoniales', 'Gymstudio' ),
		'items_list_navigation' => __( 'Navegación de Testimoniales', 'Gymstudio' ),
		'filter_items_list'     => __( 'Filtrar Testimoniales', 'Gymstudio' ),
	);
	$args = array(
		'label'                 => __( 'Testimoniales', 'Gymstudio' ),
		'description'           => __( 'Testimoniales para el Sitio Web', 'Gymstudio' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-editor-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimoniales', $args );

}
add_action( 'init', 'Gymstudio_testimoniales', 0 );