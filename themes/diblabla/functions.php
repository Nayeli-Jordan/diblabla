<?php /**
* Define paths to javascript, styles, theme and site.
**/
define( 'JSPATH', get_template_directory_uri() . '/js/' );
define( 'CSSPATH', get_template_directory_uri() . '/css/' );
define( 'THEMEPATH', get_template_directory_uri() . '/' );
define( 'SITEURL', site_url('/') );

/*------------------------------------*\
	#INCLUDES
\*------------------------------------*/

//require_once( 'inc/ri-template-hooks.php' ); orden de elementos en post
//require_once( 'inc/ri-template-functions.php' );

require_once( 'inc/pages.php' );
require_once( 'inc/post-types.php' );
require_once( 'inc/taxonomies.php' );

//require_once( 'inc/taxonomies.php' ); categorías
//require_once( 'inc/meta-boxes.php' ); información específica para cada post
//require_once( 'inc/attachment-meta.php' );
//require_once( 'inc/users.php' ); cambios usuario wp

/*------------------------------------*\
	#GENERAL FUNCTIONS
\*------------------------------------*/

/**
* Enqueue frontend scripts and styles
**/
add_action( 'wp_enqueue_scripts', function(){

	/*script en footer, aquí no lo leyó*/
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-2.1.1.min.js', array(''), '2.1.1', true );

});

//Implement thumbnail in post
add_theme_support( 'post-thumbnails' );



/*Registrar menú - Sirve sólo si se tiene un menu línean, de un solo nivel*/
/*add_action('after_setup_theme', 'add_top_menu');
function add_top_menu(){
	register_nav_menu('top_menu',__('Top menu'));
}*/

//Add Wordpress menu crear secciones de menú en WP
add_theme_support('menus');

add_action( 'after_setup_theme', 'register_our_menus' );

function register_our_menus() {
	register_nav_menu( 'sidebar_menu', __( 'Sidebar Menu' ) );
	register_nav_menu( 'footer_menu', __( 'Footer Menu' ) );
	register_nav_menu( 'footer_left_menu', __( 'Footer Left' ) );
	register_nav_menu( 'footer_center_menu', __( 'Footer Center' ) );
	register_nav_menu( 'footer_right_menu', __( 'Footer Right' ) );
	register_nav_menu( 'header_menu',__('The Header Menu'));
}

//MENÚ
class CSS_Menu_Walker extends Walker {

	var $db_fields = array('parent' => 'menu_item_parent', 'id' => 'db_id');
	
	function start_lvl(&$output, $depth = 0, $args = array()) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul>\n";
	}
	
	function end_lvl(&$output, $depth = 0, $args = array()) {
		$indent = str_repeat("\t", $depth);
		$output .= "$indent</ul>\n";
	}
	
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
	
		global $wp_query;
		$indent = ($depth) ? str_repeat("\t", $depth) : '';
		$class_names = $value = '';
		$classes = empty($item->classes) ? array() : (array) $item->classes;
		
		/* Add active class */
		if (in_array('current-menu-item', $classes)) {
			$classes[] = 'active';
			unset($classes['current-menu-item']);
		}
		
		/* Check for children */
		$children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
		if (!empty($children)) {
			$classes[] = 'has-sub';
		}
		
		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
		
		$id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
		$id = $id ? ' id="' . esc_attr($id) . '"' : '';
		
		$output .= $indent . '<li' . $id . $value . $class_names .'>';
		
		$attributes  = ! empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) .'"' : '';
		$attributes .= ! empty($item->target)     ? ' target="' . esc_attr($item->target    ) .'"' : '';
		$attributes .= ! empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn       ) .'"' : '';
		$attributes .= ! empty($item->url)        ? ' href="'   . esc_attr($item->url       ) .'"' : '';
		
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'><span>';
		$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
		$item_output .= '</span></a>';
		$item_output .= $args->after;
		
		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
	
	function end_el(&$output, $item, $depth = 0, $args = array()) {
		$output .= "</li>\n";
	}
}

//LOGO
function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

//CUSTOM POST TYPE

//Homepage video
add_action( 'add_meta_boxes', 'video_homepage_custom_metabox' );

function video_homepage_custom_metabox(){
	add_meta_box( 'video_homepage_meta', 'Video homepage', 'display_video_homepage_atributos', 'dbb-home-video', 'advanced', 'default');
}

function display_video_homepage_atributos( $video_homepage ){
	$vlink = esc_html( get_post_meta( $video_homepage->ID, 'video_homepage_vlink', true ) );
?>
	<label>Ingresa el url del video:</label>
	<input type="text" name="video_homepage_vlink" value="<?php echo $vlink; ?>" placeholder="Escribe el url" style="width: 100%;" >
	<br>
	<small><a href="<?php echo site_url('/wp-admin/upload.php'); ?>" target="_blank">Cargar o ver url de videos</a> (copiar el URL del video desde la galería de "Medios" en el administrador de WordPress)</small>
	
<?php

}

add_action( 'save_post', 'video_homepage_save_metas', 10, 2 );
function video_homepage_save_metas( $idvideo_homepage, $video_homepage ){
	//Comprobamos que es del tipo que nos interesa
	if ( $video_homepage->post_type == 'dbb-home-video' ){
	//Guardamos los datos que vienen en el POST
		if ( isset( $_POST['video_homepage_vlink'] ) ){
			update_post_meta( $idvideo_homepage, 'video_homepage_vlink', $_POST['video_homepage_vlink'] );
		}
	}
}

// Proyectos - alternativa video
add_action( 'add_meta_boxes', 'video_proyectos_custom_metabox' );

function video_proyectos_custom_metabox(){
	add_meta_box( 'video_proyectos_meta', 'Video proyectos', 'display_video_proyectos_atributos', 'dbb-proyectos', 'advanced', 'default');
}

function display_video_proyectos_atributos( $video_proyectos ){
	$videoproyect = esc_html( get_post_meta( $video_proyectos->ID, 'video_proyectos_videoproyect', true ) );
?>
	<label>Ingresa el url del video:</label>
	<input type="text" name="video_proyectos_videoproyect" value="<?php echo $videoproyect; ?>" placeholder="Escribe el url" style="width: 100%;" >
	<br>
	<small><a href="<?php echo site_url('/wp-admin/upload.php'); ?>" target="_blank">Cargar o ver url de videos</a> (copiar el URL del video desde la galería de "Medios" en el administrador de WordPress)</small>
	
<?php

}

add_action( 'save_post', 'video_proyectos_save_metas', 10, 2 );
function video_proyectos_save_metas( $idvideo_proyectos, $video_proyectos ){
	//Comprobamos que es del tipo que nos interesa
	if ( $video_proyectos->post_type == 'dbb-proyectos' ){
	//Guardamos los datos que vienen en el POST
		if ( isset( $_POST['video_proyectos_videoproyect'] ) ){
			update_post_meta( $idvideo_proyectos, 'video_proyectos_videoproyect', $_POST['video_proyectos_videoproyect'] );
		}
	}
}

//desarrolla proyectos icons
add_action( 'add_meta_boxes', 'desarrolla_proyectos_custom_metabox' );

function desarrolla_proyectos_custom_metabox(){
	add_meta_box( 'desarrolla_proyecto_meta', 'Detalles desarrolla proyecto', 'display_desarrolla_proyecto_atributos', 'dbb-desarrolla', 'side', 'high');
}

function display_desarrolla_proyecto_atributos( $desarrolla_proyecto ){
	$icon = esc_html( get_post_meta( $desarrolla_proyecto->ID, 'desarrolla_proyecto_icon', true ) );
?>
	<label>Ingresa el nombre del ícono:</label>
	<input type="text" name="desarrolla_proyecto_icon" value="<?php echo $icon; ?>" placeholder="Ej. insert_chart">
	<br>
	<small><a href="http://materializecss.com/icons.html" target="_blank">Buscar íconos</a> Eligir un ícono entre la lista que se muestra y copiar el nombre</small>
	
<?php

}

add_action( 'save_post', 'desarrolla_proyectos_save_metas', 10, 2 );
function desarrolla_proyectos_save_metas( $iddesarrolla_proyecto, $desarrolla_proyecto ){
	//Comprobamos que es del tipo que nos interesa
	if ( $desarrolla_proyecto->post_type == 'dbb-desarrolla' ){
	//Guardamos los datos que vienen en el POST
		if ( isset( $_POST['desarrolla_proyecto_icon'] ) ){
			update_post_meta( $iddesarrolla_proyecto, 'desarrolla_proyecto_icon', $_POST['desarrolla_proyecto_icon'] );
		}
	}
}

//Servicios - 3 servicios principales
add_action( 'add_meta_boxes', 'servicios_principales_custom_metabox' );

function servicios_principales_custom_metabox(){
	add_meta_box( 'servicios_principales_meta', 'Servicios principales', 'display_servicios_principales_atributos', 'dbb-servicios', 'side', 'high');
}

function display_servicios_principales_atributos( $servicios_principales ){
	$servicioa = esc_html( get_post_meta( $servicios_principales->ID, 'servicios_principales_servicioa', true ) );
?>
	<label>Ingresa los tres subservicios principales:</label>
	<input type="text" name="servicios_principales_servicioa" value="<?php echo $servicioa; ?>" placeholder="Ej. Fotografía">
	<br>
	<small>Escritos de forma continua separados por una etiqueta <'br'> (sin las comillas)</small>
<?php

}

add_action( 'save_post', 'servicios_principales_save_metas', 10, 2 );
function servicios_principales_save_metas( $idservicios_principales, $servicios_principales ){
	//Comprobamos que es del tipo que nos interesa
	if ( $servicios_principales->post_type == 'dbb-servicios' ){
	//Guardamos los datos que vienen en el POST
		if ( isset( $_POST['servicios_principales_servicioa'] ) ){
			update_post_meta( $idservicios_principales, 'servicios_principales_servicioa', $_POST['servicios_principales_servicioa'] );
		}
	}
}


//SUBSERVICIOS

// Add to your plugin admin_init function
add_action ( 'edit_tag_form_fields', 'tag_input_metabox' );
add_action ( 'edited_terms', 'save_tag_data' );
 
function tag_input_metabox($tag) {
         
    $selected = get_metadata('shiba_term', $tag->term_id, 'new_metadata', TRUE); 
     
    ?>
    <tr class="form-field">
        <th scope="row" valign="top"><label for="tag_widget"><?php _e('Paquetes') ?></label></th>
        <td>
        <textarea name='tag_meta_input' id='tag_meta_input'>    
        <!-- Display all our meta-data options -->
        </textarea>  
         </td>
    </tr>
     
    <?php
}
 
function save_tag_data($term_id) {
        if (isset($_POST['tag_meta_input'])) {
            $tag_metadata = esc_attr($_POST['tag_meta_input']);
            update_metadata('shiba_term', $term_id, 'new_metadata', $tag_metadata);
        }
}

//Proyectos - Galeria shortcode proyectos
add_action( 'add_meta_boxes', 'pgallery_short_custom_metabox' );

function pgallery_short_custom_metabox(){
	add_meta_box( 'pgallery_short_meta', 'Shortcode gallery proyectos', 'display_pgallery_short_atributos', 'dbb-proyectos', 'side', 'high');
}

function display_pgallery_short_atributos( $pgallery_short ){
	$progallery = esc_html( get_post_meta( $pgallery_short->ID, 'pgallery_short_progallery', true ) );
?>
	<label>Ingresa el shortcode de la galería:</label>
	<input type="text" name="pgallery_short_progallery" value="<?php echo $progallery; ?>" placeholder="[supsystic-gallery id='1']">
	<br>
	<small><a href="<?php echo site_url('/wp-admin/admin.php?page=supsystic-gallery&module=galleries'); ?>" target="_blank">Buscar shortcode de galería o crear una nueva</a> (copiar el "Shortcode" de la galería que se desea agregar)</small>
<?php

}

add_action( 'save_post', 'pgallery_short_save_metas', 10, 2 );
function pgallery_short_save_metas( $idpgallery_short, $pgallery_short ){
	//Comprobamos que es del tipo que nos interesa
	if ( $pgallery_short->post_type == 'dbb-proyectos' ){
	//Guardamos los datos que vienen en el POST
		if ( isset( $_POST['pgallery_short_progallery'] ) ){
			update_post_meta( $idpgallery_short, 'pgallery_short_progallery', $_POST['pgallery_short_progallery'] );
		}
	}
}


/**Add widget area**/
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Blog right sidebar',
		'id'            => 'blog_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );



/* L add support theme en proyectos*/
add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link' ) );
