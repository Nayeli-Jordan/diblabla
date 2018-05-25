<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////

add_action('init', function(){

	//Nosotros
	if( ! get_page_by_path('nosotros') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Nosotros',
			'post_name'   => 'nosotros',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	//Nuestros servicios
	if( ! get_page_by_path('servicios') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Servicios',
			'post_name'   => 'servicios',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	//Nuestros servicios
	if( ! get_page_by_path('proyectos') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Proyectos',
			'post_name'   => 'proyectos',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	//Cotiza tu proyecto
	if( ! get_page_by_path('cotiza') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Cotiza tu proyecto',
			'post_name'   => 'cotiza',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	//Privacidad
	if( ! get_page_by_path('privacidad') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Privacidad',
			'post_name'   => 'privacidad',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	//Blog
	if( ! get_page_by_path('blog-diblabla') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Blog Diblabla',
			'post_name'   => 'blog-diblabla',
			'post_type'   => 'blog-diblabla'
		);
		wp_insert_post( $page, true );
	}

});