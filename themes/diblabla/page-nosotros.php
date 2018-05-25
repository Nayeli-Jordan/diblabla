<?php
	get_header();
	the_post();
?>

	<?php get_template_part( 'template/template-portada' ); ?>

	<section id="page-nosotros">
		<div class="container container-topb">
			<!--<div class="encabezado-pagina center-align">
				<h2><?php the_title(); ?></h2>
				<p><?php the_content(); ?></p>
			</div>-->
			<div class="row">
				<?php
				$post_args = array(
					'post_type' => 'dbb-page-nosotros',
					'posts_per_page' => 3,
					'order'=> 'ASC',  //DESC
					'orderby' => 'post_date', //'post_title'
				);
				$post_query = new WP_Query( $post_args );
				if ( $post_query->have_posts() ) : while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
					<div class="col s4">
						<div class="col-container">
							<div class="block-square center-align">
								<h3><?php the_title(); ?></h3>
								<img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
								<div class="servicio-name valign-wrapper wow zoomIn" data-wow-delay="0.2s">
									<p><?php the_content(); ?></p>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; wp_reset_postdata(); endif; ?>
			</div>	
		</div>
	</section>
	
<?php get_footer(); ?>