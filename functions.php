<?php 
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

add_theme_support( 'post-thumbnails' );
the_post_thumbnail( array(100,100) ); 


/**truncar cantidad de palabras***/
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
}
/**truncar cantidad de palabras***/


// Register Custom Banner Home
function Banner() {

	$labels = array(
		'name'                  => _x( 'Banner ', 'Post Type General Name', 'analou' ),
		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'analou' ),
		'menu_name'             => __( 'Banner', 'analou' ),
		'name_admin_bar'        => __( 'Post Type', 'analou' ),
		'archives'              => __( 'Archivo', 'analou' ),
		'attributes'            => __( 'Atributos', 'analou' ),
		'parent_item_colon'     => __( 'Artículo principal', 'analou' ),
		'all_items'             => __( 'Todos los artículos', 'analou' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'analou' ),
		'add_new'               => __( 'Añadir nuevo', 'analou' ),
		'new_item'              => __( 'Nuevo artículo', 'analou' ),
		'edit_item'             => __( 'Editar elemento', 'analou' ),
		'update_item'           => __( 'Actualizar artículo', 'analou' ),
		'view_item'             => __( 'Ver ítem', 'analou' ),
		'view_items'            => __( 'Ver artículos', 'analou' ),
		'search_items'          => __( 'Buscar artículo', 'analou' ),
		'not_found'             => __( 'Extraviado', 'analou' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'analou' ),
		'featured_image'        => __( 'Foto principal', 'analou' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'analou' ),
		'remove_featured_image' => __( 'Remove featured image', 'analou' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'analou' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'analou' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'analou' ),
		'items_list'            => __( 'Lista de artículos', 'analou' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'analou' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'analou' ),
	);
	$args = array(
		'label'                 => __( 'Banner Home', 'analou' ),
		'description'           => __( 'Post Type Description', 'analou' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Banner', $args );

}
add_action( 'init', 'Banner', 0 );



// Register Custom Servicio Home
function Servicio() {

	$labels = array(
		'name'                  => _x( 'Servicio ', 'Post Type General Name', 'analou' ),
		'singular_name'         => _x( 'Servicio', 'Post Type Singular Name', 'analou' ),
		'menu_name'             => __( 'Servicio', 'analou' ),
		'name_admin_bar'        => __( 'Post Type', 'analou' ),
		'archives'              => __( 'Archivo', 'analou' ),
		'attributes'            => __( 'Atributos', 'analou' ),
		'parent_item_colon'     => __( 'Artículo principal', 'analou' ),
		'all_items'             => __( 'Todos los artículos', 'analou' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'analou' ),
		'add_new'               => __( 'Añadir nuevo', 'analou' ),
		'new_item'              => __( 'Nuevo artículo', 'analou' ),
		'edit_item'             => __( 'Editar elemento', 'analou' ),
		'update_item'           => __( 'Actualizar artículo', 'analou' ),
		'view_item'             => __( 'Ver ítem', 'analou' ),
		'view_items'            => __( 'Ver artículos', 'analou' ),
		'search_items'          => __( 'Buscar artículo', 'analou' ),
		'not_found'             => __( 'Extraviado', 'analou' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'analou' ),
		'featured_image'        => __( 'Foto principal', 'analou' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'analou' ),
		'remove_featured_image' => __( 'Remove featured image', 'analou' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'analou' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'analou' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'analou' ),
		'items_list'            => __( 'Lista de artículos', 'analou' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'analou' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'analou' ),
	);
	$args = array(
		'label'                 => __( 'Servicio Home', 'analou' ),
		'description'           => __( 'Post Type Description', 'analou' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Servicio', $args );

}
add_action( 'init', 'Servicio', 0 );


// Register Custom Producto Home
function Producto() {

	$labels = array(
		'name'                  => _x( 'Producto ', 'Post Type General Name', 'analou' ),
		'singular_name'         => _x( 'Producto', 'Post Type Singular Name', 'analou' ),
		'menu_name'             => __( 'Producto', 'analou' ),
		'name_admin_bar'        => __( 'Post Type', 'analou' ),
		'archives'              => __( 'Archivo', 'analou' ),
		'attributes'            => __( 'Atributos', 'analou' ),
		'parent_item_colon'     => __( 'Artículo principal', 'analou' ),
		'all_items'             => __( 'Todos los artículos', 'analou' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'analou' ),
		'add_new'               => __( 'Añadir nuevo', 'analou' ),
		'new_item'              => __( 'Nuevo artículo', 'analou' ),
		'edit_item'             => __( 'Editar elemento', 'analou' ),
		'update_item'           => __( 'Actualizar artículo', 'analou' ),
		'view_item'             => __( 'Ver ítem', 'analou' ),
		'view_items'            => __( 'Ver artículos', 'analou' ),
		'search_items'          => __( 'Buscar artículo', 'analou' ),
		'not_found'             => __( 'Extraviado', 'analou' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'analou' ),
		'featured_image'        => __( 'Foto principal', 'analou' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'analou' ),
		'remove_featured_image' => __( 'Remove featured image', 'analou' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'analou' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'analou' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'analou' ),
		'items_list'            => __( 'Lista de artículos', 'analou' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'analou' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'analou' ),
	);
	$args = array(
		'label'                 => __( 'Producto Home', 'analou' ),
		'description'           => __( 'Post Type Description', 'analou' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array(  'category'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Producto', $args );

}
add_action( 'init', 'Producto', 0 );



// Register Custom Footer Home
function Footer() {

	$labels = array(
		'name'                  => _x( 'Footer ', 'Post Type General Name', 'analou' ),
		'singular_name'         => _x( 'Footer', 'Post Type Singular Name', 'analou' ),
		'menu_name'             => __( 'Footer', 'analou' ),
		'name_admin_bar'        => __( 'Post Type', 'analou' ),
		'archives'              => __( 'Archivo', 'analou' ),
		'attributes'            => __( 'Atributos', 'analou' ),
		'parent_item_colon'     => __( 'Artículo principal', 'analou' ),
		'all_items'             => __( 'Todos los artículos', 'analou' ),
		'add_new_item'          => __( 'Agregar ítem nuevo', 'analou' ),
		'add_new'               => __( 'Añadir nuevo', 'analou' ),
		'new_item'              => __( 'Nuevo artículo', 'analou' ),
		'edit_item'             => __( 'Editar elemento', 'analou' ),
		'update_item'           => __( 'Actualizar artículo', 'analou' ),
		'view_item'             => __( 'Ver ítem', 'analou' ),
		'view_items'            => __( 'Ver artículos', 'analou' ),
		'search_items'          => __( 'Buscar artículo', 'analou' ),
		'not_found'             => __( 'Extraviado', 'analou' ),
		'not_found_in_trash'    => __( 'No se encuentra en la basura', 'analou' ),
		'featured_image'        => __( 'Foto principal', 'analou' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'analou' ),
		'remove_featured_image' => __( 'Remove featured image', 'analou' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'analou' ),
		'insert_into_item'      => __( 'Insertar en el elemento', 'analou' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'analou' ),
		'items_list'            => __( 'Lista de artículos', 'analou' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'analou' ),
		'filter_items_list'     => __( 'Lista de elementos de filtro', 'analou' ),
	);
	$args = array(
		'label'                 => __( 'Footer Home', 'analou' ),
		'description'           => __( 'Post Type Description', 'analou' ),
		'labels'                => $labels,
		'supports'              => array( 'title', '', '' ),
		'taxonomies'            => array(  ''),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Footer', $args );

}
add_action( 'init', 'Footer', 0 );
