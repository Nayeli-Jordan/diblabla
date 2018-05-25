<?php

/*------------------------------------*\
	TAXONOMIES
\*------------------------------------*/

add_action( 'init', 'custom_taxonomies_callback', 0 );
function custom_taxonomies_callback(){

	// Sección Header páginas
	if( ! taxonomy_exists('seccion')){

		$labels = array(
			'name'              => 'Sección',
			'singular_name'     => 'Sección',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar sección',
			'update_item'       => 'Actualizar sección',
			'add_new_item'      => 'Nuevo sección',
			'menu_name'         => 'Sección'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'seccion' ),
		);

		register_taxonomy( 'seccion', 'dbb-home-video', $args );
	}

	// Slider proyectos
	if( ! taxonomy_exists('sliderproyecto')){

		$labels = array(
			'name'              => 'Slider proyectos',
			'singular_name'     => 'Slider proyectos',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar proyecto',
			'update_item'       => 'Actualizar proyecto',
			'add_new_item'      => 'Nuevo proyecto',
			'menu_name'         => 'Slider proyectos'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'sliderproyecto' ),
		);

		register_taxonomy( 'sliderproyecto', 'dbb-proyectos', $args );
	}

	// Subservicios
	if( ! taxonomy_exists('subservicios')){

		$labels = array(
			'name'              => 'Subservicios',
			'singular_name'     => 'Subservicios',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar subservicio',
			'update_item'       => 'Actualizar subservicio',
			'add_new_item'      => 'Nuevo subservicio',
			'menu_name'         => 'Subservicios'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'subservicios' ),
		);

		register_taxonomy( 'subservicios', 'dbb-servicios', $args );
	}

}// custom_taxonomies_callback


