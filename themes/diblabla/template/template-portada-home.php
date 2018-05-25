<?php 	
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
	<div id="slider-intro" class="slider fullscreen">
	    <ul class="slides">
	      <?php
			$post_args = array(
				'post_type' => 'dbb-home-video',
				'posts_per_page' => 1,
				'tax_query' => array(
					array(
						'taxonomy' => 'seccion',
						'field'    => 'slug',
						'terms'    => 'portada-homepage'
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
						<div class="portada-text-intro wow fadeInUp" data-wow-delay="0.2s">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content();?></p>
						</div>
						<video id="headerVideo" src="<?php echo $vlink; ?>" muted autoplay></video>
                        <div id="portada-video" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)"></div>
                        <div class="controls-video">
                        	<a class="waves-effect waves-light btn btn-plus hide" id="controls-play"><i class="material-icons icon-large">play_arrow</i></a>
                        	<a class="waves-effect waves-light btn btn-plus" id="controls-stop"><i class="material-icons icon-large">stop</i></a>
                        	<a class="waves-effect waves-light btn btn-plus" id="unmuteButton"><i class="material-icons">notifications_active</i></a>
                        	<a class="waves-effect waves-light btn btn-plus hide" id="muteButton"><i class="material-icons">notifications_off</i></a>
                        </div>
			       	<?php else : ?>
			       		<div class="home-slider-opacity">
			       			<div class="portada-text-intro wow fadeInUp" data-wow-delay="0.2s">
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