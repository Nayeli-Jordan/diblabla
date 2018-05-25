<?php

add_action('init', 'dbb_custom_post_types');
/**
 * Registrar custom post types
 */
function dbb_custom_post_types() {
dbb_home_video();
dbb_que_hacemos();
dbb_servicios();
dbb_cotiza_proyecto();
dbb_proyectos();
dbb_clientes();
dbb_page_nosotros();
dbb_desarrolla();
}

/**
 * Registrar post type "Homepage video"
 */
function dbb_home_video() {

	$labels = array(
	'name' => 'Portadas',
	'singular_name' => 'Portadas',
	'add_new' => 'Agregar nueva portada',
	'add_new_item' => 'Agregar nueva portada',
	'edit_item' => 'Editar portada',
	'new_item' => 'Nueva portada',
	'all_items' => 'Todos',
	'view_item' => 'Ver todas las portadas',
	'search_items' => 'Buscar portada',
	'not_found' => 'No se encontró',
	'menu_name' => 'Portadas'
	);

	$args = array(
	'labels' => $labels,
	'public' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'video-homepage' ),
	'has_archive' => true,
	'menu_position' => 5,
	'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'dbb-home-video', $args );
}


/**
 * Registrar post type "Que hacemos"
 */
function dbb_que_hacemos() {

	$labels = array(
	'name' => 'Imagen Qué hacemos',
	'singular_name' => 'Imágenes Qué hacemos',
	'add_new' => 'Agregar nueva imagen',
	'add_new_item' => 'Agregar nueva imagen',
	'edit_item' => 'Editar imagen Qué hacemos',
	'new_item' => 'Nuevo imagen Que hacemos',
	'all_items' => 'Todos',
	'view_item' => 'Ver todas las imágenes',
	'search_items' => 'Buscar imágenes',
	'not_found' => 'No se encontró',
	'menu_name' => 'Qué hacemos'
	);

	$args = array(
	'labels' => $labels,
	'public' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'que-hacemos' ),
	'has_archive' => true,
	'menu_position' => 5,
	'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'dbb-que-hacemos', $args );
}

/**
 * Registrar post type "Nuestros servicios"
 */
function dbb_servicios() {

$labels = array(
	'name' => 'Nuestros servicios',
	'singular_name' => 'Nuestros servicios',
	'add_new' => 'Agregar nuevo servicio',
	'add_new_item' => 'Agregar nuevo servicio',
	'edit_item' => 'Editar Servicios',
	'new_item' => 'Nuevo Servicio',
	'all_items' => 'Todos',
	'view_item' => 'Ver todos los servicios',
	'search_items' => 'Buscar servicio',
	'not_found' => 'No se encontró',
	'menu_name' => 'Servicios'
	);

	$args = array(
	'labels' => $labels,
	'public' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'nuestros-servicios' ),
	'has_archive' => true,
	'menu_position' => 5,
	'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt')
	);
	register_post_type( 'dbb-servicios', $args );
}

/**
 * Registrar post type "Cotiza tu proyecto"
 */
function dbb_cotiza_proyecto() {

	$labels = array(
	'name' => 'Imagen Cotiza tu proyecto',
	'singular_name' => 'Imágenes Cotiza tu proyecto',
	'add_new' => 'Agregar nueva imagen',
	'add_new_item' => 'Agregar nueva imagen',
	'edit_item' => 'Editar imagen Cotiza tu proyecto',
	'new_item' => 'Nuevo imagen Cotiza tu proyecto',
	'all_items' => 'Todos',
	'view_item' => 'Ver todas las imágenes',
	'search_items' => 'Buscar imágenes',
	'not_found' => 'No se encontró',
	'menu_name' => 'Cotiza proyecto'
	);

	$args = array(
	'labels' => $labels,
	'public' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'cotiza-tu-proyecto' ),
	'has_archive' => true,
	'menu_position' => 5,
	'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'dbb-cotiza-proyecto', $args );
}


/**
 * Registrar post type "Nuestros proyectos"
 */
function dbb_proyectos() {

	$labels = array(
	'name' => 'Proyectos',
	'singular_name' => 'Proyectos',
	'add_new' => 'Agregar nuevo proyecto',
	'add_new_item' => 'Agregar nuevo proyecto',
	'edit_item' => 'Editar proyecto',
	'new_item' => 'Nuevo proyecto',
	'all_items' => 'Todos',
	'view_item' => 'Ver todos los proyectos',
	'search_items' => 'Buscar proyecto',
	'not_found' => 'No se encontró',
	'menu_name' => 'Proyectos'
	);

	$args = array(
	'labels' => $labels,
	'public' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'nuestros-proyectos' ),
	'has_archive' => true,
	'menu_position' => 5,
	'supports' => array( 'title', 'editor', 'thumbnail', 'post-formats')
	);
	register_post_type( 'dbb-proyectos', $args );



}

/**
 * Registrar post type "Nuestros clientes"
 */
function dbb_clientes() {

	$labels = array(
	'name' => 'Logo clientes',
	'singular_name' => 'Logo clientes',
	'add_new' => 'Agregar nuevo logo',
	'add_new_item' => 'Agregar nuevo logo',
	'edit_item' => 'Editar logo cliente',
	'new_item' => 'Nuevo logo clientes',
	'all_items' => 'Todos',
	'view_item' => 'Ver todos los logos',
	'search_items' => 'Buscar logo',
	'not_found' => 'No se encontró',
	'menu_name' => 'Clientes'
	);

	$args = array(
	'labels' => $labels,
	'public' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'nuestros-clientes' ),
	'has_archive' => true,
	'menu_position' => 5,
	'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'dbb-clientes', $args );
}


/**
 * Registrar post type "Página nosotros"
 */
function dbb_page_nosotros() {

	$labels = array(
	'name' => 'Página Nosotros',
	'singular_name' => 'Página Nosotros',
	'add_new' => 'Agregar nuevo bloque',
	'add_new_item' => 'Agregar nuevo bloque',
	'edit_item' => 'Editar bloque',
	'new_item' => 'Nuevo bloque',
	'all_items' => 'Todos',
	'view_item' => 'Ver todos bloques',
	'search_items' => 'Buscar bloque',
	'not_found' => 'No se encontró',
	'menu_name' => 'Página nosotros'
	);

	$args = array(
	'labels' => $labels,
	'public' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'pagina-nosotros' ),
	'has_archive' => true,
	'menu_position' => 5,
	'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'dbb-page-nosotros', $args );
}

/**
 * Registrar post type "Página cotiza - Desarrolla tu proyecto"
 */
function dbb_desarrolla() {

	$labels = array(
	'name' => 'Crea tu proyecto',
	'singular_name' => 'Crea tu proyecto',
	'add_new' => 'Agregar nueva etapa',
	'add_new_item' => 'Agregar nueva etapa',
	'edit_item' => 'Editar etapa proyecto',
	'new_item' => 'Nuevo etapa proyecto',
	'all_items' => 'Todos',
	'view_item' => 'Ver todas las etapas',
	'search_items' => 'Buscar etapas',
	'not_found' => 'No se encontró',
	'menu_name' => 'Crea tu proyecto'
	);

	$args = array(
	'labels' => $labels,
	'public' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'desarrolla-tu-proyecto' ),
	'has_archive' => true,
	'menu_position' => 5,
	'supports' => array( 'title', 'editor', 'thumbnail')
	);
	register_post_type( 'dbb-desarrolla', $args );
}
