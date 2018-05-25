<?php 
	if (is_page('nosotros')) {
		$nombre_seccion = 'nosotros';
	} elseif (is_page('servicios')) {
		$nombre_seccion = 'servicios';
	} elseif (is_page('proyectos')) {
		$nombre_seccion = 'proyectos';
	} elseif (is_page('blog-diblabla')) {
		$nombre_seccion = 'blog-diblabla';
	} elseif (is_page('cotiza')) {
		$nombre_seccion = 'cotiza';
	} elseif (is_single('cobertura-de-eventos')) {
		$nombre_seccion = 'cobertura-de-eventos';
	} elseif (is_single('comunicacion-de-marca')) {
		$nombre_seccion = 'comunicacion-de-marca';
	} elseif (is_single('desarrollo-de-contenidos-digitales')) {
		$nombre_seccion = 'desarrollo-de-contenidos';
	} elseif (is_single('identidad-corporativa')) {
		$nombre_seccion = 'identidad-corporativa';
	} else {
		$nombre_seccion = 'no-asignada';
	}
	
	//agregar logo en slider - portada
	$custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
<section id="initial-slider">
	<div id="logo-diblabla">
		<a href="<?php echo site_url(''); ?>">
			<img src="<?php echo $image[0]; ?>" alt="Logotipo Diblabla">
		</a>
	</div>
	<div class="slider fullscreen">
	    <ul class="slides">
	      <?php
			$post_args = array(
				'post_type' => 'dbb-home-video',
				'posts_per_page' => -1,
				'tax_query' => array(
					array(
						'taxonomy' => 'seccion',
						'field'    => 'slug',
						'terms'    => 'portada-' . $nombre_seccion
					),
				),
			);
			$post_query = new WP_Query( $post_args );
			if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post(); 
			    $custom_fields = get_post_custom();
				$post_id = get_the_ID();
				$vlink = get_post_meta( $post_id, 'video_homepage_vlink', true );
			?>
				<li>
					<?php if( $vlink != "" ) : ?>
						<div class="portada-text-intro">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content();?></p>
						</div>
						<video class="header-video" src="<?php echo $vlink; ?>" autoplay loop></video>
						<!-- <video class="header-video" src="<?php echo $vlink; ?>" autoplay loop>
                          <source src="<?php echo $vlink; ?>" type="video/mp4">
                          <source src="<?php echo $vlink; ?>" type="video/ogg">
                           Your browser does not support the video tag.
                        </video> -->
			       	<?php else : ?>
			       		<div class="home-slider-opacity">
			       			<div class="portada-text-intro">
								<h2><?php the_title(); ?></h2>
								<p><?php the_content();?></p>
							</div>
			       		</div>
			       		
			       		<img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
			       	<?php endif; ?>
			    </li>
			<?php endwhile; wp_reset_postdata(); endif; ?>
		</ul>
	  </div>
</section>