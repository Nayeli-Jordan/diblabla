<?php
	get_header();
	the_post();
?>

	<?php get_template_part( 'template/template-portada' ); ?>

	<section id="page-cotiza">
		<!--<div class="container container-only-b">
			<div class="encabezado-pagina center-align">
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
			</div>	
		</div>-->
	</section>
	<section id="desarrolla" class="center-align">
		<div class="container container-topb">
			<a href="<?php echo site_url('/cotiza'); ?>">
				<h2>Desarrolla <span>UN PROYECTO</span></h2>
			</a>
			<div class="row">
				<?php
				$post_args = array(
					'post_type' => 'dbb-desarrolla',
					'posts_per_page' => 4,
					'order'=> 'ASC',  //DESC
					'orderby' => 'post_date', //'post_title'
				);
				$post_query = new WP_Query( $post_args );
				if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post(); 
				    $custom_fields = get_post_custom();
					$post_id = get_the_ID();
					$icon = get_post_meta( $post_id, 'desarrolla_proyecto_icon', true );
				?>
					<div class="col s3">
				    	<?php if( $icon != "" ) : ?>
							<i class="medium material-icons wow jackInTheBox" data-wow-delay="0.1s"><?php echo $icon; ?></i>
						<?php else : ?>
							<img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
						<?php endif; ?>
				    	<p><?php the_content();?></p>
				    </div>

				<?php endwhile; wp_reset_postdata(); endif; ?>
			</div>
		</div>
	</section>
	<section id="formulario-cotizacion">
		<div class="container">
			<div>
				<?php echo do_shortcode('[ninja_form id=5]'); ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>